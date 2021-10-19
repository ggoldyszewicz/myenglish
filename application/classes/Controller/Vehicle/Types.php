<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Vehicle_Types extends Controller_Home 
{
    public $current_controller = 'vehicle_types';
    
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
            $this -> template -> content -> vehicle_types = Db_Vehicle_Type::getAll();
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
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> item = Db_Vehicle_Type::get($id);
            }
            

            if($post = $this->request->post())
            {
                if(isset($post['vehicle_type_id']) && $post['vehicle_type_id'] > 0)
                {
                    Db_Vehicle_Type::update($post);
                }
                else
                {
                    Db_Vehicle_Type::add($post);
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
                $this -> template -> content -> vehicle_type_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['vehicle_type_id']) && $post['vehicle_type_id'] > 0)
                {
                    $vehicle_type_id = Protection::clear_str($post['vehicle_type_id']);
                    Db_Vehicle_Type::delete($vehicle_type_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
