<?php defined('SYSPATH') or die('No direct script access.');

class Controller_News extends Controller_Home 
{
    public $current_controller = 'news';
    
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
            $this -> template -> content -> news = Db_New::getAll();
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
                $item = Db_New::get($id);
                $this -> template -> content -> item = $item;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['new_id']) && $post['new_id'] > 0)
                {
                    Db_New::update($post);
                }
                else
                {
                    Db_New::add($post);
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
                $this -> template -> content -> new_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['new_id']) && $post['new_id'] > 0)
                {
                    $new_id = Protection::clear_str($post['new_id']);
                    Db_New::delete($new_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
