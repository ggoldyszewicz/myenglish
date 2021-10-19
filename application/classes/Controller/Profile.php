<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Profile extends Controller_Home 
{
    public $current_controller = 'profile';
    
    public function action_index()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/content');
            $this -> template -> content -> users = Db_User::getAll();
            
            if($post = $this->request->post())
            {
                $user = Auth::instance()->get_user();
                $user_id = $user -> id;
                Db_User::updateUserPassword($user_id, $post['password']);
            }
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
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/new');
            $this -> template -> content -> types_of_contract = Infrastructure::getContractTypesSelect();
            $employee_id = $this -> request -> param('id');
            $this -> template -> content -> user_managers = Db_Employee::getUserManagers($employee_id, 'manager');
            $is_manager = false;
            $is_administrator = false;
            if(isset($employee_id))
            {
                $user = Db_User::get($employee_id);
                if($user->has('roles', ORM::factory('role', array('name' => 'manager'))))
                {
                    $is_manager = true;
                }
                if($user->has('roles', ORM::factory('role', array('name' => 'admin'))))
                {
                    $is_administrator = true;
                }
                $this -> template -> content -> item = Db_Employee::get($employee_id);
                $this -> template -> content -> is_manager = $is_manager;
                $this -> template -> content -> is_administrator = $is_administrator;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['employee_id']) && $post['employee_id'] > 0)
                {
                    Db_Employee::update($post);
                }
                else
                {
                    Db_Employee::add($post);
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
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/delete');
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> employee_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['employee_id']) && $post['employee_id'] > 0)
                {
                    $employee_id = Protection::clear_str($post['employee_id']);
                    Db_Employee::delete($employee_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
