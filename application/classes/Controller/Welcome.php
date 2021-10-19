<?php defined('SYSPATH') or die('No direct script access.');

class Controller_Welcome extends Controller 
{
    public function action_index()
    {
        if(!Auth::instance()->logged_in())
        {
            header('Location: '.Kohana::$config->load('globals.base_url').'login');
            exit;
        }
        else
        {
            $this->response->body('hello, world!');
        }
    }
}
