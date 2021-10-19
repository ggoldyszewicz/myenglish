<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Brands extends Controller_Home 
{
    public $current_controller = 'brands';
    
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
            $this -> template -> content = View::factory('templates/brands/content');
            $this -> template -> content -> brands = Db_Brand::getAll();
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
            $this -> template -> content = View::factory('templates/brands/new');
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> item = Db_Brand::get($id);
            }
            

            if($post = $this->request->post())
            {
                if(isset($post['brand_id']) && $post['brand_id'] > 0)
                {
                    Db_Brand::update($post);
                }
                else
                {
                    Db_Brand::add($post);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').'brands');
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
            $this -> template -> content = View::factory('templates/brands/delete');
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> brand_id = $id;
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['brand_id']) && $post['brand_id'] > 0)
                {
                    $brand_id = Protection::clear_str($post['brand_id']);
                    Db_Brand::delete($brand_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').'brands');
                exit;
            }
        }
    }
    
}
