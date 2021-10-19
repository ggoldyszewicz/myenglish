<?php
defined('SYSPATH') OR die('No direct access allowed.');

class Db_Category 
{
    public static function add($post)
    {
        $categorie = ORM::factory('categorie');
        $categorie->title = $post['name'];
        $categorie->parent_id = $post['parent'];
        $categorie->description = $post['description'];
        $categorie->owner = Auth::instance()->get_user()->id;
        $categorie->save();
        return $categorie -> pk();
    }
    
    public static function update($post)
    {
        DB::update('categories')
            ->set(array(
                'title'=>$post['name'],
                'parent_id'=>(int)$post['parent'],
                'description'=>$post['description']
            ))->where('category_id','=',(int)$post['category_id'])
            ->execute();
    }
    
    public static function updatePrivate($user_id, $category_id, $private)
    {
        $admin = false;
        $user = Db_User::get($user_id);
        $category = Db_Category::get($category_id);
        $owner_id = $category -> owner;
        if($user->has('roles', ORM::factory('Role', array('name' => 'admin'))))
        {
            $admin = true;
        }
        $haveprivate = false;
        if(Db_User::havePermission($user_id, 'haveprivate'))
        {
            $haveprivate = true;
        }
        if($admin || ($haveprivate && $user_id == $owner_id))
        {
            DB::update('categories')
            ->set(array(
                'private'=>$private
            ))->where('category_id','=',(int)$category_id)
            ->execute();
        }
    }
    
    public static function get($category_id)
    {
        return ORM::factory('categorie')
            ->select('*')
            ->where('category_id', '=', $category_id)
            ->find();
    }
    
    public static function delete($category_id)
    {
        DB::update('categories')
            ->set(array(
                'deleted'=>1,
            ))->where('category_id','=',(int)$category_id)
            ->execute();
    }
    
    public static function print_menu($id)
    {
        $admin = false;
        $reading = false;
        $editing = false;
        $deleting = false;
        $adding = false;
        $tree_menu = '';
        
        if(Auth::instance()->logged_in())
        {
            $u = Auth::instance()->get_user();
            if($u->has('roles', ORM::factory('Role', array('name' => 'admin'))))
            {
                $admin = true;
            }
            $user_id = $u -> id;
            if(Db_User::havePermission($user_id, 'reading'))
            {
                $reading = true;
            }
            if(Db_User::havePermission($user_id, 'adding'))
            {
                $adding = true;
            }
            if(Db_User::havePermission($user_id, 'editing'))
            {
                $editing = true;
            }
            if(Db_User::havePermission($user_id, 'deleting'))
            {
                $deleting = true;
            }
            
        $member = ORM::factory('Categorie');
        
        // get all records from database whose parent is $id
        $result = $member->select('title')->where('parent_id', '=', $id)->where('deleted', '=', 0)->order_by('position', 'asc')->find_all()->as_array();
        //check if there are any results
        if(count($result) > 0)
        {
            if($id == 0)
            {
                    $tree_menu .= '<ol class="sortable">';
            }
            else
            {
                    $tree_menu .= '<ol>';
            }

            foreach($result as $item)
            {
                if($admin || ($reading && $user_id != $item -> owner && $item -> private == 0) || $user_id == $item -> owner)
                {
                    $class_own = $user_id == $item -> owner ? ' own' : ''; 
                    
                    $tree_menu .= '<li id="list_'.$item->category_id.'"><div class="box'.$class_own.'"><span class="disclose"><span></span></span><div class="content"><a href="'.Kohana::$config->load('globals.base_url').'category/index/'.$item->category_id.'" title="'.$item->description.'">'.  $item->title.'</a>';
                    $cat_count = Db_Category::getCountContent($item->category_id);
                    if($cat_count > 0)
                    {
                        $tree_menu .= ' ('.$cat_count.')';
                    }
                    if($item -> private == 1)
                    {
                        $tree_menu .= ' <b>[PRV]</b>';
                    }
                    $tree_menu .= '</div><div class="mod">';

                    if($admin || $editing || $user_id == $item -> owner)
                    {
                        $tree_menu .= '<div class="handle"> </div>';
                    }
                    
                    if($admin || $deleting || $user_id == $item -> owner)
                    {
                        $tree_menu .= '<a href="'.Kohana::$config->load('globals.base_url').'category/delete/'.$item->category_id.'" class="del" title="'.__('Delete').'"><span class="ui-icon ui-icon-trash"></span></a>';
                    }
                    
                    if($admin || $editing || $user_id == $item -> owner)
                    {
                        $tree_menu .= '<a href="'.Kohana::$config->load('globals.base_url').'category/new/'.$item->category_id.'" class="edit" title="'.__('Edit').'"><span class="ui-icon ui-icon-pencil"></span></a>';
                    }
                    
                    if($admin || $adding || $user_id == $item -> owner)
                    {
                        $tree_menu .= '<a href="'.Kohana::$config->load('globals.base_url').'category/new/?parent_id='.$item->category_id.'" class="edit" title="'.__('Add subcategory').'"><span class="ui-icon ui-icon-plusthick"></span></a>';
                    }
                    
                    $tree_menu .= '</div></div>';
                    
                    $tree_menu .= Db_Category::print_menu($item->category_id);
                }
            }
            $tree_menu .= '</ol>';
        }
        }
        
        return $tree_menu;
    }
    
    public static function print_menu_parent($id, $current, $i, $tree, $first, $is_item_block = null)
    {
        $admin = false;
        $reading = false;
        $editing = false;
        $deleting = false;
        $u = Auth::instance()->get_user();
        if($u->has('roles', ORM::factory('Role', array('name' => 'admin'))))
        {
            $admin = true;
        }
        $user_id = $u -> id;
        if(Db_User::havePermission($user_id, 'reading'))
        {
            $reading = true;
        }
        if(Db_User::havePermission($user_id, 'editing'))
        {
            $editing = true;
        }
        if(Db_User::havePermission($user_id, 'deleting'))
        {
            $deleting = true;
        }
        
        $temp = $tree;
        
        if($first == 1)
        {
            $temp[0] = '---';
        }
		
        $member = ORM::factory('Categorie');

        $result = $member
            -> select('*')
            -> where('parent_id', '=', $id)
            -> where('deleted', '=', 0)
            -> order_by('position', 'ASC')
            -> find_all()
            -> as_array();

        if(count($result) > 0)
        {
            foreach($result as $item)
            {
                if($item->category_id != $current)
                {
                    if($admin || ($reading && $user_id != $item -> owner && $item -> private == 0) || $user_id == $item -> owner)
                    {
                        if($is_item_block != null && $is_item_block == true)
                        {
                            $c_content = Db_Category::getCountContent($item->category_id);
                            $temp[$item->category_id] = '<div style="float: left; width: '.($i*25).'px; height: 30px; "></div><div class="tree-box-content">'.$item->title;
                            if($c_content > 0)
                            {
                                $temp[$item->category_id] .= ' ('.$c_content.')';
                            }
                            $temp[$item->category_id] .= '</div>';
                            $temp += Db_Category::print_menu_parent($item->category_id,$current, $i + 1, $temp, 0, true);
                        }
                        else
                        {
                            $temp[$item->category_id] = str_repeat("--", $i).$item->title;					
                            $temp += Db_Category::print_menu_parent($item->category_id,$current, $i + 1, $temp, 0);
                        }
                        
                    }
                }
            }
        }
        return $temp;
    }
    
    public static function getParents($category_id)
    {
        $result = array();
        $parent_id = Db_Category::getParent($category_id);
        if($parent_id != null && $parent_id > 0)
        {
            $result[] = $parent_id;
        }
        while($parent_id > 0)
        {
            $parent_id = Db_Category::getParent($parent_id);
            if($parent_id != null && $parent_id > 0)
            {
                $result[] = $parent_id;
            }
        }
        return $result;
    }
    
    public static function getParent($category_id)
    {
        $category = ORM::factory('Categorie')
            -> select('*')
            -> where('category_id', '=', $category_id)
            -> find();
        return isset($category -> parent_id) ? $category -> parent_id : null;
    }
    
    public static function getName($category_id)
    {
        $category = ORM::factory('Categorie')
            -> select('*')
            -> where('category_id', '=', $category_id)
            -> find();
        return isset($category -> title) ? $category -> title : null;
    }
    
    public static function getCountContent($category_id)
    {
        $contents = ORM::factory('Word')
                ->where('category_id', '=', $category_id)
                ->where('deleted', '=', 0)
                ->find_all();
        return count($contents);
    }
}