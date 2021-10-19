<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Content extends Controller_Home 
{
    public $current_controller = 'employees';
    
    public function action_index()
    {
        $admin = false;
        $reading = false;
        $editing = false;
        $deleting = false;
        $adding = false;
        if(!Auth::instance()->logged_in())
        {
                header('Location: '.Kohana::$config->load('globals.base_url').'login');
                exit;
        }	
        else
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
            
            $scripts_indexTable = array(
                    'media/js/indexTable/scripts.js',
            );

            $this->template->content = View::factory('templates/content/indexTable');

            $this->template->content->scripts = $scripts_indexTable;

            $this->template->indexUrl = Kohana::$config->load('globals.base_url')."content/indexTable";

            $table = ORM::factory('Word')->join('categories','LEFT')->on('categories.category_id', '=', 'word.category_id')->select('categories.title')->find_all()->as_array();

            $this->template->content->table = $table;
            
            $this->template->content -> admin = $admin;
            $this->template->content -> deleting = $deleting;
        }
    }

    public function action_treechange()
    {
            if($post = $this->request->post())
            {
                    $array = array();

                    $list = $post['list'];

                    $member = ORM::factory('Categorie');
                    $result = $member->select('category_id')->find_all()->as_array();

                    foreach($result as $item)
                    {	
                            $query = DB::update('categories')->set(array('parent_id'=>(int)$list[$item->category_id], 'position'=>(int)array_search($item->category_id, array_keys($list))))->where('category_id','=',(int)$item->category_id)->execute();
                    }

                    $this->template->content = true;
            }
    }

    public function print_menu($id, $current, $i, $tree) 
    {
            $temp = $tree;



            $member = ORM::factory('Categorie');

            $result = $member->select('title')->where('parent_id', '=', $id)->find_all()->as_array();

            if(count($result) > 0)
            {
                    foreach($result as $item)
                    {
                            if($item->category_id != $current)
                            {
                                    $temp[$item->category_id] = str_repeat("--", $i).$item->title;					
                                    $temp += $this->print_menu($item->category_id,$current, $i + 1, $temp);
                            }
                    }
            }
            return $temp;
    }

    public function action_new()
    {
            $id = $this->request->param('id');

            $this->template->content = View::factory('templates/content/content_new_form');

            $this->template->content->tree = $this->print_menu(0, $id, 0, array());

            if(isset($id))
            {
                    $categorie = ORM::factory('Word');
                    $result = Db_Content::get($id);

                    $this->template->content->item = $result;
                    $category_id = $result -> category_id;
                    $this->template->content-> category_id = $category_id;
                $this -> template -> menu -> active = $category_id;
                $this -> template -> header -> parents = Db_Category::getParents($category_id);
            }
            else
            {
                $category_id = 0;
                if(isset($_GET))
                {
                    if(isset($_GET['category_id']))
                    {
                        $category_id = $_GET['category_id'];
                    }
                }
                $this->template->content-> category_id = $category_id;
                $this -> template -> menu -> active = $category_id;
                $this -> template -> header -> parents = Db_Category::getParents($category_id);
            }

            if($post = $this->request->post())
            {
                $category_id = 0;
                    if($post['content_id'] == 0)
                    {
                            if(count($post['word']) == count($post['translation']))
                            {
                                    for($i=0; $i<count($post['word']);$i++)
                                    {	
                                            $word_model = ORM::factory('word');
                                            $word_model->word = $post['word'][$i];
                                            $word_model->category_id = $post['parent'];
                                            $word_model->translation = $post['translation'][$i];
                                            $word_model->createdby = Auth::instance()->get_user()->id;
                                            $word_model->save();
                                    }
                            }
                            $category_id = $post['parent'];
                    }
                    else
                    {
                            DB::update('words')->set(array('word'=>$post['word'],'category_id'=>(int)$post['parent'],'translation'=>$post['translation']))->where('id','=',(int)$post['content_id'])->execute();
                            $category_id = (int)$post['parent'];
                    }
                    if($category_id > 0)
                    {
                        header('Location: '.Kohana::$config->load('globals.base_url').'category/index/'.$category_id);
                        exit;
                    }
                    else
                    {
                        header('Location: '.Kohana::$config->load('globals.base_url'));
                        exit;
                    }
            }

    }

    public function action_delete()
    {
        $id = $this->request->param('id');
        $this->template->content = View::factory('templates/content/content_delete_confirm');
        $this->template->content->word_id = $id;
        $category_id = Db_Content::getContentCategory($id);
        $this->template->content->category_id = $category_id;
        $this -> template -> menu -> active = $category_id;
        $this -> template -> header -> parents = Db_Category::getParents($category_id);
        
        if($post = $this->request->post())
        {
            $word_id = (int)$post['word_id'];
            $category_id = Db_Content::getContentCategory($word_id);
            if($word_id != 0)
            {
                Db_Content::delete($word_id);
            }
            header('Location: '.Kohana::$config->load('globals.base_url').'category/index/'.$category_id);
            exit;
        }
    }
}
