<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Opinions extends Controller_Home 
{
    public $current_controller = 'opinions';
    
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
            $this -> template -> content -> opinions = Db_Opinion::getAll();
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
                $item = Db_Opinion::get($id);
                $this -> template -> content -> item = $item;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['opinion_id']) && $post['opinion_id'] > 0)
                {
                    Db_Opinion::update($post);
                }
                else
                {
                    Db_Opinion::add($post);
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
                $this -> template -> content -> opinion_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['opinion_id']) && $post['opinion_id'] > 0)
                {
                    $opinion_id = Protection::clear_str($post['opinion_id']);
                    Db_Opinion::delete($opinion_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
