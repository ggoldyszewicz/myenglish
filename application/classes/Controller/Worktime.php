<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Worktime extends Controller_Home 
{
    public $current_controller = 'worktime';
    
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
            $this -> template -> content -> worktimes = Db_Worktime::getAll();
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
                $this -> template -> content -> item = Db_Worktime::get($id);
            }
            
            $this -> template -> content -> years = Infrastructure::getRangeSelect(2013, 2014);
            $this -> template -> content -> months = Time::getMonthsSelect();
            $this -> template -> content -> worktimes = Infrastructure::getRangeSelect(22, 1);

            if($post = $this->request->post())
            {
                if(isset($post['worktime_id']) && $post['worktime_id'] > 0)
                {
                    Db_Worktime::update($post);
                }
                else
                {
                    Db_Worktime::add($post);
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
                $this -> template -> content -> worktime_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['worktime_id']) && $post['worktime_id'] > 0)
                {
                    $worktime_id = (int)Protection::clear_str($post['worktime_id']);
                    Db_Worktime::delete($worktime_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller);
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
