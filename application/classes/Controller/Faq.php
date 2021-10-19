<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Faq extends Controller_Home 
{
    public $current_controller = 'faq';
    
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
            $this -> template -> content -> news = Db_Faq::getAll();
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
                $item = Db_Faq::get($id);
                $this -> template -> content -> item = $item;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['faq_id']) && $post['faq_id'] > 0)
                {
                    Db_Faq::update($post);
                }
                else
                {
                    Db_Faq::add($post);
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
                $this -> template -> content -> faq_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['faq_id']) && $post['faq_id'] > 0)
                {
                    $faq_id = Protection::clear_str($post['faq_id']);
                    Db_Faq::delete($faq_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
                exit;
            }
        }
    }
    
}
