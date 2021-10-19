<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Users extends Controller_Home 
{
    public $current_controller = 'users';
    
    public function action_index()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $u = Auth::instance()->get_user();
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/content');
            $this -> template -> content -> users = Db_User::getAll();
            $this -> template -> content -> user_id = $u -> id;
        }
    }
    
    public function action_new()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/user_new_form');
            
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $item = Db_User::get($id);
                $this -> template -> content -> item = $item;
                $user = Db_User::get($id);
                if($user->has('roles', ORM::factory('role', array('name' => 'admin'))))
                {
                    $this -> template -> content -> is_administrator = true;
                }
                if($user->has('roles', ORM::factory('role', array('name' => 'superadmin'))))
                {
                    $this -> template -> content -> is_sueradministrator = true;
                }
                $permissions = array(
                    'reading',
                    'adding',
                    'editing',
                    'deleting',
                    'haveprivate'
                );
                foreach($permissions as $p)
                {
                    if(Db_User::havePermission($id, $p))
                    {
                        $this -> template -> content -> $p = true;
                    }
                }
            }
            

            if($post = $this->request->post())
            {
                if(isset($post['user_id']) && $post['user_id'] > 0)
                {
                    if(!Db_User::checkUniqueUsername($post['login'], $post['email'], $post['user_id']))
                    {
                        Db_User::update($post['user_id'], $post);
                        if($post['password'] != '')
                        {
                            Db_User::updateUserPassword($post['user_id'], $post['password']);
                        }
                        Db_User::updateAdditional($post['user_id'], $post);
                        Db_User::updateRoles($post['user_id'], $post);
                        Db_User::updatePermissions($post['user_id'], $post);
                    }
                }
                else
                {
                    if(!Db_User::checkUniqueUsername($post['login'], $post['email'], 0))
                    {
                        $user_id = Db_User::add($post);
                        Db_User::addAdditional($user_id, $post);
                        Db_User::updateRoles($user_id, $post);
                        Db_User::updatePermissions($user_id, $post);
                    }
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
    public function action_delete()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/user_delete_confirm');
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> user_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['user_id']) && $post['user_id'] > 0)
                {
                    
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
