<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Home extends Controller_Template 
{
    public $template = 'templates/home/index';
    public $current_controller = 'home';
    public $auto_render = true;
    
    public function before()
    {
        parent::before();
        if ($this->auto_render) 
        {
            if(isset($_COOKIE["lang"]))
            {
                $lang = $_COOKIE["lang"];
            }
            else
            {
                $lang = 'pl-pl';
            }
            
            $styles = array(
                'media/css/stylesheets.css' => 'all',
                'media/css/fullcalendar.print.css' => 'print',
                'media/css/jquery.simplecolorpicker.css' => 'all',
                'media/css/jquery.treeview.css' => 'all',
            );
            
            $scripts = array(
                'media/js/jquery.min.js',
                'media/js/jquery-ui.min.js',
                'media/js/plugins/jquery/jquery.mousewheel.min.js',
                'media/js/plugins/cookie/jquery.cookies.2.2.0.min.js',
                'media/js/plugins/bootstrap.min.js',
                'media/js/plugins/charts/excanvas.min.js',
                'media/js/plugins/charts/jquery.flot.js',
                'media/js/plugins/charts/jquery.flot.stack.js',
                'media/js/plugins/charts/jquery.flot.pie.js',
                'media/js/plugins/charts/jquery.flot.resize.js',
                'media/js/plugins/sparklines/jquery.sparkline.min.js',
                'media/js/plugins/fullcalendar/fullcalendar.min.js',
                'media/js/plugins/select2/select2.min.js',
                'media/js/plugins/uniform/uniform.js',
                'media/js/plugins/maskedinput/jquery.maskedinput-1.3.min.js',
                'media/js/plugins/validation/languages/jquery.validationEngine-en.js',
                'media/js/plugins/validation/jquery.validationEngine.js',
                'media/js/plugins/mcustomscrollbar/jquery.mCustomScrollbar.min.js',
                'media/js/plugins/animatedprogressbar/animated_progressbar.js',
                'media/js/plugins/qtip/jquery.qtip-1.0.0-rc3.min.js',
                'media/js/plugins/cleditor/jquery.cleditor.js',
                'media/js/plugins/ckeditor/ckeditor.js',
                'media/js/plugins/dataTables/jquery.dataTables.min.js',
                'media/js/plugins/fancybox/jquery.fancybox.pack.js',
                'media/js/cookies.js',
                'media/js/actions.js',
                'media/js/charts.js',
                'media/js/plugins.js',
                'media/js/jquery.simplecolorpicker.js',
                'media/js/jquery.cookie.js',
                'media/js/jquery.mjs.nestedSortable.js',
                'media/js/lang/'.$lang.'.js',
                'media/js/indexTable/scripts.js',
            );  
            
            $this -> template -> header = View::factory('templates/home/header');
            $this -> template -> header -> styles = $styles;
            $this -> template -> header -> scripts = $scripts;
            
            
            if(Auth::instance()->logged_in())
            {
                $user = Auth::instance()->get_user();
                
                if($user->has('roles', ORM::factory('role', array('name' => 'admin'))))
                {
                    $this -> template -> menu = View::factory('templates/menus/menuAdmin');
                }
                else
                {
                    $this -> template -> menu = View::factory('templates/menus/menuUser');
                }
                $this -> template -> menu -> user = $user;
                $this -> template -> menu -> tree_menu = Db_Category::print_menu(0);
                $user_id = $user -> id;
                if($user->has('roles', ORM::factory('Role', array('name' => 'admin'))) || Db_User::havePermission($user_id, 'adding'))
                {
                    $this -> template -> menu -> adding = true;
                }
            }
        }	
    }
    
        
    
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
            $this -> template -> content = View::factory('templates/home/content');
            $user = Auth::instance()->get_user();
        }
    }
}
