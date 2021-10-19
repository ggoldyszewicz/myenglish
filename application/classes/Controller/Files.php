<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Files extends Controller_Template
{
    public $template = 'templates/message';
    
    public function action_server()
    {
        require Kohana::find_file('vendor','uploadhandler');
        error_reporting(E_ALL | E_STRICT);
        
        $id = $this -> request -> param('id');
        $image_versions = array(
            'thumbnail' => array(
                'max_width' => 155,
                'max_height' => 155
            ),
            'home' => array(
                'max_width' => 541,
                'max_height' => 2000
            ),
            'list' => array(
                'max_width' => 330,
                'max_height' => 2000
            ),
            'advert' => array(
                'max_width' => 494,
                'max_height' => 2000
            )
            
        );
        
        $upload_handler = new UploadHandler(array(
            'user_dirs' => true,
            'user_id' => $id,
            'image_versions' => $image_versions,
        ));
        
    }    
    
    public function action_serverPhotos()
    {
        require Kohana::find_file('vendor','uploadhandlerPhotos');
        error_reporting(E_ALL | E_STRICT);
        
        $image_versions = array(
            'thumbnail' => array(
                'max_width' => 155,
                'max_height' => 20000
            ),            
        );
        
        $upload_handler = new UploadHandler(array(
            'user_dirs' => false,
            'image_versions' => $image_versions,
        ));
        
    } 
    
    public function action_brandsPhotos()
    {
        require Kohana::find_file('vendor','uploadhandlerBrandsPhotos');
        error_reporting(E_ALL | E_STRICT);
        
        $id = $this -> request -> param('id');
        $image_versions = array(
            'thumbnail' => array(
                'max_width' => 155,
                'max_height' => 20000
            ),
        );
        
        $upload_handler = new UploadHandler(array(
            'user_dirs' => true,
            'user_id' => $id,
            'image_versions' => $image_versions,
        ));
        
    }  
    
    public function action_linksPhotos()
    {
        require Kohana::find_file('vendor','uploadhandlerLinksPhotos');
        error_reporting(E_ALL | E_STRICT);
        
        $id = $this -> request -> param('id');
        $image_versions = array(
            'thumbnail' => array(
                'max_width' => 20000,
                'max_height' => 48
            ),
        );
        
        $upload_handler = new UploadHandler(array(
            'user_dirs' => true,
            'user_id' => $id,
            'image_versions' => $image_versions,
        ));
        
    }    
}
