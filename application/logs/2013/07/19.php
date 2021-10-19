<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-19 12:02:36 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/additional_equipment/content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-19 12:02:36 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/addit...')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/addit...', NULL)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Additional\Equipment.php(17): Kohana_View::factory('templates/addit...')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Additional_Equipment->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Additional_Equipment))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-19 12:21:03 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: vehicle_types ~ APPPATH\views\templates\additional_equipment\content.php [ 34 ] in C:\wamp\www\autogcm\administrator\application\views\templates\additional_equipment\content.php:34
2013-07-19 12:21:03 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\views\templates\additional_equipment\content.php(34): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\aut...', 34, Array)
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\autogcm\administrator\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Additional_Equipment))
#11 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\autogcm\administrator\application\views\templates\additional_equipment\content.php:34