<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-17 09:44:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: years ~ APPPATH\views\templates\users\new.php [ 45 ] in C:\wamp\www\rcp\application\views\templates\users\new.php:45
2013-09-17 09:44:51 --- DEBUG: #0 C:\wamp\www\rcp\application\views\templates\users\new.php(45): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\rcp...', 45, Array)
#1 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#2 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#3 C:\wamp\www\rcp\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\rcp\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#6 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#7 C:\wamp\www\rcp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#11 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\rcp\application\views\templates\users\new.php:45