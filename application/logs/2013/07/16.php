<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-16 09:07:52 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:07:52 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/login')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/login', NULL)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/login')
#3 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(11): Kohana_Controller_Template->before()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(69): Controller_Authorization->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:09:02 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:09:02 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/heade...')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/heade...', NULL)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(25): Kohana_View::factory('templates/heade...')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(69): Controller_Authorization->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:09:53 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/login could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:09:53 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/login')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/login', NULL)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(33): Kohana_View::factory('templates/login')
#3 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(11): Kohana_Controller_Template->before()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(69): Controller_Authorization->before()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:10:31 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/header could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:10:31 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/heade...')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/heade...', NULL)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(25): Kohana_View::factory('templates/heade...')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(69): Controller_Authorization->before()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:11:02 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/footer could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:11:02 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/foote...')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/foote...', NULL)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(118): Kohana_View::factory('templates/foote...')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Controller_Authorization->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:11:16 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/footer could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:11:16 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/foote...')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/foote...', NULL)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(118): Kohana_View::factory('templates/foote...')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Controller_Authorization->after()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php:137
2013-07-16 09:16:13 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: header ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php:25
2013-07-16 09:16:13 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(25): Kohana_View->__get('header')
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(69): Controller_Authorization->before()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php:25
2013-07-16 09:48:29 --- CRITICAL: ErrorException [ 1 ]: Class 'Protection' not found ~ APPPATH\classes\Controller\authorization.php [ 59 ] in :
2013-07-16 09:48:29 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-16 09:51:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: email ~ APPPATH\classes\Controller\authorization.php [ 59 ] in C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php:59
2013-07-16 09:51:58 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(59): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 59, Array)
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Authorization->action_login()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php:59
2013-07-16 09:52:56 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 09:52:56 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('fr')
#1 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('fr', 'fr', false)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(72): Kohana_Auth->login('fr', 'fr')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Authorization->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 09:55:38 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 09:55:38 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('fr')
#1 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('fr', 'fr', false)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(72): Kohana_Auth->login('fr', 'fr')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Authorization->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 09:56:19 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 09:56:19 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('fr')
#1 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('fr', 'fr', false)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(72): Kohana_Auth->login('fr', 'fr')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Authorization->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 10:02:23 --- CRITICAL: Kohana_Exception [ 0 ]: A valid hash key must be set in your auth config. ~ MODPATH\auth\classes\Kohana\Auth.php [ 155 ] in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 10:02:23 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php(40): Kohana_Auth->hash('fr')
#1 C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth.php(92): Kohana_Auth_File->_login('fr', 'fr', false)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\authorization.php(72): Kohana_Auth->login('fr', 'fr')
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Authorization->action_login()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\auth\classes\Kohana\Auth\File.php:40
2013-07-16 10:03:07 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_User' not found ~ APPPATH\classes\Controller\authorization.php [ 95 ] in :
2013-07-16 10:03:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :