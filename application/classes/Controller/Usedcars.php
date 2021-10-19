<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Usedcars extends Controller_Home 
{
    public $current_controller = 'usedcars';
    
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
            $this -> template -> content -> usedcars = Db_Usedcar::getAll();
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
                $item = Db_Usedcar::get($id);
                $this -> template -> content -> item = $item;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['usedcar_id']) && $post['usedcar_id'] > 0)
                {
                    Db_Usedcar::update($post);
                }
                else
                {
                    Db_Usedcar::add($post);
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
                $this -> template -> content -> usedcar_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['usedcar_id']) && $post['usedcar_id'] > 0)
                {
                    $usedcar_id = Protection::clear_str($post['usedcar_id']);
                    Db_Usedcar::delete($usedcar_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
