<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Links extends Controller_Home 
{
    public $current_controller = 'links';
    
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
            $this -> template -> content -> links = Db_Link::getAll();
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
            $this -> template -> content -> range_array = Infrastructure::getRangeSelect(0, 20);
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> item = Db_Link::get($id);
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['link_id']) && $post['link_id'] > 0)
                {
                    Db_Link::update($post);
                }
                else
                {
                    Db_Link::add($post);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').'links');
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
                $this -> template -> content -> link_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['link_id']) && $post['link_id'] > 0)
                {
                    $link_id = Protection::clear_str($post['link_id']);
                    Db_Link::delete($link_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').'links');
                exit;
            }
        }
    }
    
    public function action_photos()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/photos');
            $id = $this -> request -> param('id');
            $this -> template -> content -> id = $id;
        }
    }    
    
}
