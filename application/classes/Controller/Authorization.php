<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Authorization extends Controller_Template 
{
    public $template = 'templates/login/index';

    public $auto_render = true;

    public function before()
    {
        parent::before();
        if ($this->auto_render) 
        {
            $styles = array(
                'media/css/stylesheets.css' => 'all',
                'media/css/fullcalendar.print.css' => 'print',
            );
            
            $scripts = array(
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
                'media/js/plugins/dataTables/jquery.dataTables.min.js',
                'media/js/plugins/fancybox/jquery.fancybox.pack.js',
                'media/js/cookies.js',
                'media/js/actions.js',
                'media/js/charts.js',
                'media/js/plugins.js',
            );

            $this -> template -> styles = $styles;
            $this -> template -> scripts = $scripts;                      	
        }	
    }	

    public function action_login()
    {
        $errors = null;
        $post = $this -> request -> post();

        if($post)
        {
            $email = Protection::clear_str($post['inputEmail']);
            $password = Protection::clear_str($post['inputPassword']);
                
            if(isset($post['remember']) && $post['remember'] == 1)
            {
                Auth::instance()->login($email, $password, true);
                if(Auth::instance()->logged_in())
                {
                    $user = Auth::instance()->get_user();
                }
            }
            else
            {
                Auth::instance()->login($email, $password);
                if(Auth::instance()->logged_in())
                {
                    $user = Auth::instance()->get_user();
                }
            }

            if($email == '' && $password == '')
            {
                $errors = __('Email and Password field can not be blank');
            }
            else 
            {
                if($email == '')
                {
                    $errors = __('Email field can not be blank');
                }
                if($password == '')
                {
                    $errors = __('Password field can not be blank');
                }
                if($email != '' && $password != '')
                {
                    $users = Db_User::getAll($email);
                    if($users -> count())
                    {
                        $errors = __('The password is not correct');
                    }
                    else
                    {
                        $errors = __('The specified user does not exist');
                    }
                }
            }
            if(isset($errors))
            {
                $this -> template -> errors = $errors;
            }
        }

        if(Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config -> load('globals.base_url'));
            exit;
        }
    }

    public function action_logout()
    {
        Auth::instance()->logout();
        header('Location: '.Kohana::$config->load('globals.base_url'));
        exit;
    }
}