<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Additional_Equipment extends Controller_Home 
{
    public $current_controller = 'additional_equipment';
    
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
            $this -> template -> content -> additional_equipments = Db_Additional_Equipment::getAll();
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
                $this -> template -> content -> item = Db_Additional_Equipment::get($id);
            }
            

            if($post = $this->request->post())
            {
                if(isset($post['additional_equipment_id']) && $post['additional_equipment_id'] > 0)
                {
                    Db_Additional_Equipment::update($post);
                }
                else
                {
                    Db_Additional_Equipment::add($post);
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
            
            $id = (int)  Protection::clear_str($this -> request -> param('id'));
            
            if(isset($id))
            {
                $this -> template -> content -> additional_equipment_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['additional_equipment_id']) && $post['additional_equipment_id'] > 0)
                {
                    $additional_equipment_id = Protection::clear_str($post['additional_equipment_id']);
                    Db_Additional_Equipment::delete($additional_equipment_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
