<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Brands_Models extends Controller_Home 
{
    public $current_controller = 'brands_models';
    
    public function action_index()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $brand_id = 0;
            if(isset($_GET))
            {
                if(isset($_GET['brand_id']))
                {
                    $brand_id = Protection::clear_str($_GET['brand_id']);
                }
            }
            
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/content');
            $this -> template -> content -> brands = Db_Brand::getAllSelect();
            $this -> template -> content -> brand_id = $brand_id;
            
            $this -> template -> content -> brands_models = Db_Brand_Model::getModels($brand_id);
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
            $brand_id = 0;
            if(isset($_GET))
            {
                if(isset($_GET['brand_id']))
                {
                    $brand_id = Protection::clear_str($_GET['brand_id']);
                }
            }
            
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/new');
            $this -> template -> content -> brand_id = $brand_id;
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> item = Db_Brand_Model::get($id);
            }
            

            if($post = $this->request->post())
            {
                if(isset($post['model_id']) && $post['model_id'] > 0)
                {
                    Db_Brand_Model::update($post);
                }
                else
                {
                    Db_Brand_Model::add($post);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller.'?brand_id='.$brand_id);
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
            $brand_id = 0;
            
                    
            if(isset($id))
            {
                $model = Db_Brand_Model::get($id);
                $brand_id = $model -> brand_id;
            
                $this -> template -> content -> model_id = $id;
                $this -> template -> content -> brand_id = $brand_id;
            }
            
            if($post = $this->request->post())
            {
                
                if(isset($post['model_id']) && $post['model_id'] > 0)
                {
                    $model_id = Protection::clear_str($post['model_id']);
                    $model = Db_Brand_Model::get($model_id);
                    $brand_id = $model -> brand_id;
                    Db_Brand_Model::delete($model_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller.'?brand_id='.$brand_id);
                exit;
            }
        }
    }
    
}
