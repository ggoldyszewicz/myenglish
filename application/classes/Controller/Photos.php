<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Photos extends Controller_Home 
{
    public $current_controller = 'photos';
    
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
            $this -> template -> content -> pages = Db_Page::getAll();
        }
    }    
}
