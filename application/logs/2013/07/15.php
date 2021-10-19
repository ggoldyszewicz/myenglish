<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-15 08:11:04 --- CRITICAL: Kohana_Exception [ 0 ]: A valid cookie salt is required. Please set Cookie::$salt. ~ SYSPATH\classes\Kohana\Cookie.php [ 152 ] in C:\wamp\www\autogcm-administrator\system\classes\Kohana\Cookie.php:67
2013-07-15 08:11:04 --- DEBUG: #0 C:\wamp\www\autogcm-administrator\system\classes\Kohana\Cookie.php(67): Kohana_Cookie::salt('lang', NULL)
#1 C:\wamp\www\autogcm-administrator\system\classes\Kohana\Request.php(155): Kohana_Cookie::get('lang')
#2 C:\wamp\www\autogcm-administrator\index.php(117): Kohana_Request::factory(true, Array, false)
#3 {main} in C:\wamp\www\autogcm-administrator\system\classes\Kohana\Cookie.php:67