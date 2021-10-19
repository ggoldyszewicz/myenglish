<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-25 19:23:43 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\templates\adverts\new.php [ 242 ] in C:\wamp\www\autogcm\administrator\application\views\templates\adverts\new.php:242
2013-07-25 19:23:43 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\views\templates\adverts\new.php(242): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\aut...', 242, Array)
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\autogcm\administrator\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#11 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\autogcm\administrator\application\views\templates\adverts\new.php:242