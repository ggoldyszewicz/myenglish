<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-20 00:16:16 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Check.php [ 79 ] in :
2013-09-20 00:16:16 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 00:17:28 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Check.php [ 79 ] in :
2013-09-20 00:17:28 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 00:17:29 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Check.php [ 79 ] in :
2013-09-20 00:17:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 00:21:05 --- CRITICAL: ErrorException [ 1 ]: Using $this when not in object context ~ APPPATH\classes\Controller\Check.php [ 79 ] in :
2013-09-20 00:21:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 00:29:05 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Model_User::id() ~ APPPATH\classes\Controller\Profile.php [ 24 ] in :
2013-09-20 00:29:05 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 14:09:33 --- CRITICAL: Database_Exception [ 1146 ]: Table 'sources_myenglish.contracts' doesn't exist [ SELECT *, `user`.`id` AS `id`, `user`.`email` AS `email`, `user`.`username` AS `username`, `user`.`password` AS `password`, `user`.`logins` AS `logins`, `user`.`last_login` AS `last_login` FROM `users` AS `user` LEFT JOIN `users_additionals` ON (`users_additionals`.`id` = `user`.`id`) LEFT JOIN `contracts` ON (`contracts`.`user_id` = `user`.`id`) WHERE `user`.`id` = '1' LIMIT 1 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-20 14:09:33 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `user...', false, Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#3 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Employee.php(162): Kohana_ORM->find()
#4 C:\wamp\www\my-english-new.pl\application\classes\Controller\Employees.php(49): Db_Employee::get('1')
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-20 14:16:44 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_User::havePermission() ~ MODPATH\db\classes\Db\Category.php [ 22 ] in :
2013-09-20 14:16:44 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 14:17:37 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users_Permission' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-09-20 14:17:37 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 14:17:53 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Infrastructure::substr() ~ MODPATH\db\classes\Db\Category.php [ 57 ] in :
2013-09-20 14:17:53 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 14:44:22 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/category/indexTable could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 14:44:22 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/categ...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/categ...', NULL)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(65): Kohana_View::factory('templates/categ...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 14:44:42 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Content' not found ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 14:44:42 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 14:45:25 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: menus ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:70
2013-09-20 14:45:25 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(70): Kohana_View->__get('menus')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:70
2013-09-20 14:51:30 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: menus ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php:83
2013-09-20 14:51:30 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php(83): Kohana_View->__get('menus')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php:83
2013-09-20 15:22:53 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 15:22:53 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/templ...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/templ...')
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(13): Kohana_Controller_Template->before()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(69): Controller_Content->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 15:26:47 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 15:26:47 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/templ...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/templ...')
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(13): Kohana_Controller_Template->before()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(69): Controller_Content->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 15:27:09 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/template could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 15:27:09 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/templ...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/templ...', NULL)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/templ...')
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(13): Kohana_Controller_Template->before()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(69): Controller_Content->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 15:28:28 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: nav_bar ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:143
2013-09-20 15:28:28 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(143): Kohana_View->__get('nav_bar')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Controller_Content->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:143
2013-09-20 15:29:27 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Controller_Content::print_menu() ~ APPPATH\classes\Controller\Content.php [ 55 ] in :
2013-09-20 15:29:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 15:29:39 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: nav_bar ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:143
2013-09-20 15:29:39 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(143): Kohana_View->__get('nav_bar')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Controller_Content->after()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:143
2013-09-20 15:35:28 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templates\content\content_new_form.php [ 43 ] in C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php:43
2013-09-20 15:35:28 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php(43): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\my-...', 43, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php:43
2013-09-20 15:36:14 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_Word class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-20 15:36:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php(49): Kohana_ORM->__get('name')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-20 15:37:27 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Word as array ~ APPPATH\views\templates\content\content_new_form.php [ 241 ] in :
2013-09-20 15:37:27 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 15:38:14 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Word as array ~ APPPATH\views\templates\content\content_new_form.php [ 245 ] in :
2013-09-20 15:38:14 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 15:38:17 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Word as array ~ APPPATH\views\templates\content\content_new_form.php [ 245 ] in :
2013-09-20 15:38:17 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 15:45:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: translation ~ APPPATH\classes\Controller\Content.php [ 110 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:45:10 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 110, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Content->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: translation ~ APPPATH\classes\Controller\Content.php [ 110 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:12 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 110, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Content->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:17 --- CRITICAL: ErrorException [ 8 ]: Undefined index: translation ~ APPPATH\classes\Controller\Content.php [ 110 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:17 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 110, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Content->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:22 --- CRITICAL: ErrorException [ 8 ]: Undefined index: translation ~ APPPATH\classes\Controller\Content.php [ 110 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:22 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 110, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Content->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:26 --- CRITICAL: ErrorException [ 8 ]: Undefined index: translation ~ APPPATH\classes\Controller\Content.php [ 110 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:46:26 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 110, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Content->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:48:23 --- CRITICAL: ErrorException [ 8 ]: Undefined index: translation ~ APPPATH\classes\Controller\Content.php [ 110 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 15:48:23 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php(110): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 110, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Content->action_new()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Content.php:110
2013-09-20 16:27:34 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\content\content_new_form.php [ 89 ] in C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php:89
2013-09-20 16:27:34 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php(89): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 89, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Content))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\content\content_new_form.php:89
2013-09-20 17:06:44 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bodypart_id ~ APPPATH\classes\Controller\Check.php [ 96 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:44 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 96, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Check->action_getNewContent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bodypart_id ~ APPPATH\classes\Controller\Check.php [ 96 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:45 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 96, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Check->action_getNewContent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bodypart_id ~ APPPATH\classes\Controller\Check.php [ 96 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:45 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 96, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Check->action_getNewContent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:45 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: bodypart_id ~ APPPATH\classes\Controller\Check.php [ 96 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:06:45 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php(96): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 96, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Check->action_getNewContent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:96
2013-09-20 17:15:23 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Check.php [ 101 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:101
2013-09-20 17:15:23 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php(101): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\my-...', 101, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Check->action_getNewContent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:101
2013-09-20 17:15:34 --- CRITICAL: ErrorException [ 8 ]: Array to string conversion ~ APPPATH\classes\Controller\Check.php [ 101 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:101
2013-09-20 17:15:34 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php(101): Kohana_Core::error_handler(8, 'Array to string...', 'C:\wamp\www\my-...', 101, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Check->action_getNewContent()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Check.php:101
2013-09-20 17:43:30 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_Content::getCategoryContent() ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 17:43:30 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 17:43:40 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_Content::getCategoryContent() ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 17:43:40 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 17:43:49 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_Content::getCategoryContent() ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 17:43:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 17:43:55 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_Content::getCategoryContent() ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 17:43:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 17:44:06 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_Content::getCategoryContent() ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 17:44:06 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 17:44:13 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Db_Content::getCategoryContent() ~ APPPATH\classes\Controller\Category.php [ 67 ] in :
2013-09-20 17:44:13 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 18:36:01 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: u ~ APPPATH\classes\Controller\Home.php [ 82 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php:82
2013-09-20 18:36:01 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php(82): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 82, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php:82
2013-09-20 18:36:13 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: menus ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php:85
2013-09-20 18:36:13 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php(85): Kohana_View->__get('menus')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Home))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Home.php:85
2013-09-20 18:38:33 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/category_new_form could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 18:38:33 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/categ...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/categ...', NULL)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(11): Kohana_View::factory('templates/categ...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 18:50:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\category\category_new_form.php [ 61 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:61
2013-09-20 18:50:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php(61): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 61, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:61
2013-09-20 18:50:39 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\category\category_new_form.php [ 104 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:104
2013-09-20 18:50:39 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php(104): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 104, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:104
2013-09-20 19:58:24 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ APPPATH\views\templates\category\category_new_form.php [ 42 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:42
2013-09-20 19:58:24 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php(42): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\my-...', 42, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:42
2013-09-20 20:12:48 --- CRITICAL: Kohana_Exception [ 0 ]: The id property does not exist in the Model_Categorie class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-20 20:12:48 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('id')
#1 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php(42): Kohana_ORM->__get('id')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-20 20:13:46 --- CRITICAL: Kohana_Exception [ 0 ]: The word property does not exist in the Model_Categorie class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-20 20:13:46 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('word')
#1 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php(48): Kohana_ORM->__get('word')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-20 20:14:34 --- CRITICAL: ErrorException [ 1 ]: Cannot use object of type Model_Categorie as array ~ APPPATH\views\templates\category\category_new_form.php [ 92 ] in :
2013-09-20 20:14:34 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-20 20:45:37 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/category_delete_confirm could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 20:45:37 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/categ...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/categ...', NULL)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(68): Kohana_View::factory('templates/categ...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_delete()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-20 20:52:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category ~ APPPATH\views\templates\category\category_delete_confirm.php [ 48 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_delete_confirm.php:48
2013-09-20 20:52:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_delete_confirm.php(48): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 48, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_delete_confirm.php:48
2013-09-20 21:28:54 --- CRITICAL: Database_Exception [ 1052 ]: Column 'deleted' in where clause is ambiguous [ SELECT *, `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` LEFT JOIN `categories` ON (`categories`.`category_id` = `word`.`category_id`) WHERE `categories`.`category_id` = '20' AND `deleted` = 0 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-20 21:28:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `word...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Content.php(14): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(57): Db_Content::getCategoryContent('20')
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-20 22:37:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\category\generateTest.php [ 105 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:105
2013-09-20 22:37:02 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 105, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:105
2013-09-20 22:38:48 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\classes\Controller\Category.php [ 51 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:51
2013-09-20 22:38:48 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(51): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 51, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:51
2013-09-20 22:40:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\category\generateTest.php [ 105 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:105
2013-09-20 22:40:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 105, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:105
2013-09-20 22:41:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\category\generateTest.php [ 98 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:98
2013-09-20 22:41:26 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php(98): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 98, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:98
2013-09-20 22:58:13 --- CRITICAL: ErrorException [ 8 ]: Use of undefined constant numberStudents - assumed 'numberStudents' ~ APPPATH\views\templates\category\generateTest.php [ 48 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:48
2013-09-20 22:58:13 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php(48): Kohana_Core::error_handler(8, 'Use of undefine...', 'C:\wamp\www\my-...', 48, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:48
2013-09-20 23:00:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: selected_name ~ APPPATH\views\templates\category\generateTest.php [ 52 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:52
2013-09-20 23:00:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php(52): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 52, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:52
2013-09-20 23:18:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: trees ~ APPPATH\views\templates\category\generateTest.php [ 66 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:66
2013-09-20 23:18:28 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php(66): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 66, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\generateTest.php:66