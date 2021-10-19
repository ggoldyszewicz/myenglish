<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Brands_Models_Versions extends Controller_Home 
{
    public $current_controller = 'brands_models_versions';
    
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
            $model_id = 0;
            if(isset($_GET))
            {
                if(isset($_GET['brand_id']))
                {
                    $brand_id = Protection::clear_str($_GET['brand_id']);
                }
                if(isset($_GET['model_id']))
                {
                    $model_id = Protection::clear_str($_GET['model_id']);
                }
            }
            
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/content');
            $this -> template -> content -> brands = Db_Brand::getAllSelect();
            $this -> template -> content -> models = Db_Brand_Model::getModelsSelect($brand_id);
            $this -> template -> content -> brand_id = $brand_id;
            $this -> template -> content -> model_id = $model_id;
            
            $this -> template -> content -> brands_models_versions = Db_Brand_Model_Version::getVersions($brand_id, $model_id);
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
            $model_id = 0;
            if(isset($_GET))
            {
                if(isset($_GET['brand_id']))
                {
                    $brand_id = Protection::clear_str($_GET['brand_id']);
                }
                if(isset($_GET['model_id']))
                {
                    $model_id = Protection::clear_str($_GET['model_id']);
                }
            }
            
            $this -> template -> menu -> current = $this -> current_controller;
            $this -> template -> content = View::factory('templates/'.$this -> current_controller.'/new');
            $this -> template -> content -> brand_id = $brand_id;
            $this -> template -> content -> model_id = $model_id;
            
            $id = $this -> request -> param('id');
            if(isset($id))
            {
                $this -> template -> content -> item = Db_Brand_Model_Version::get($id);
            }
            
            if($post = $this->request->post())
            {
                if(isset($post['version_id']) && $post['version_id'] > 0)
                {
                    Db_Brand_Model_Version::update($post);
                }
                else
                {
                    Db_Brand_Model_Version::add($post);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller.'?brand_id='.$brand_id.'&model_id='.$model_id);
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
            $model_id = 0;
            
                    
            if(isset($id))
            {
                $version = Db_Brand_Model_Version::get($id);
                $brand_id = $version -> brand_id;
                $model_id = $version -> model_id;
                
                $this -> template -> content -> brand_id = $brand_id;
                $this -> template -> content -> model_id = $model_id;
                $this -> template -> content -> version_id = $id;
            }
            
            if($post = $this->request->post())
            {
                
                if(isset($post['version_id']) && $post['version_id'] > 0)
                {
                    $version_id = Protection::clear_str($post['version_id']);
                    $version = Db_Brand_Model_Version::get($version_id);
                    $brand_id = $version -> brand_id;
                    $model_id = $version -> model_id;
                    Db_Brand_Model_Version::delete($version_id);
                }
                header('Location: '.Kohana::$config->load('globals.base_url').$this -> current_controller.'?brand_id='.$brand_id.'&model_id='.$model_id);
                exit;
            }
        }
    }
    
}
