<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-21 16:12:22 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/links/content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-08-21 16:12:22 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/links...')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/links...', NULL)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Links.php(17): Kohana_View::factory('templates/links...')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Links->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Links))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-08-21 16:13:40 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: brands ~ APPPATH\views\templates\links\content.php [ 35 ] in C:\wamp\www\autogcm\administrator\application\views\templates\links\content.php:35
2013-08-21 16:13:40 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\views\templates\links\content.php(35): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\aut...', 35, Array)
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\autogcm\administrator\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Links))
#11 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\autogcm\administrator\application\views\templates\links\content.php:35
2013-08-21 16:38:46 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'href' in 'field list' [ UPDATE `brands` SET `name` = 'dsdsds', `href` = 'ds', `position` = 0 WHERE `id` = 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\autogcm\administrator\modules\database\classes\Kohana\Database\Query.php:251
2013-08-21 16:38:46 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `brands`...', false, Array)
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Link.php(56): Kohana_Database_Query->execute()
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Links.php(45): Db_Link::update(Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Links->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Links))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\database\classes\Kohana\Database\Query.php:251