<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Tests extends Controller_Home 
{
    public $current_controller = 'tests';
    
    public function action_index()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $admin = false;
            $deleting = false;
            $editing = false;
            $u = Auth::instance()->get_user();
            if($u->has('roles', ORM::factory('Role', array('name' => 'admin'))))
            {
                $admin = true;
            }
            $user_id = $u -> id;
            if(Db_User::havePermission($user_id, 'deleting'))
            {
                $deleting = true;
            }
            if(Db_User::havePermission($user_id, 'editing'))
            {
                $editing = true;
            }
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/content');
            $this -> template -> content -> tests = Db_Test::getAll();
            $this -> template -> content -> admin = $admin;
            $this -> template -> content -> deleting = $deleting;
            $this -> template -> content -> editing = $editing;
            $this -> template -> content -> user_id = $user_id;
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
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/test_new_form');
            
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $item = Db_Test::get($id);
                $this -> template -> content -> item = $item;
            }
            

            if($post = $this->request->post())
            {
                if(isset($post['test_id']) && $post['test_id'] > 0)
                {
                    Db_Test::update($post);
                }
                else
                {
                    
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
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/test_delete_confirm');
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> test_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['test_id']) && $post['test_id'] > 0)
                {
                    $test_id = Protection::clear_str($post['test_id']);
                    Db_Test::delete($test_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
