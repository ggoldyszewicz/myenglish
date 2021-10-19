<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-30 11:08:11 --- CRITICAL: ErrorException [ 1 ]: Call to undefined method Infrastructure::getColorsSelect() ~ APPPATH\classes\Controller\Adverts.php [ 42 ] in :
2013-07-30 11:08:11 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-30 11:09:21 --- CRITICAL: ErrorException [ 8 ]: Undefined index: vin ~ MODPATH\db\classes\Db\Advert.php [ 27 ] in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:27
2013-07-30 11:09:21 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(27): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 27, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(66): Db_Advert::add(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:27
2013-07-30 11:10:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: colour ~ MODPATH\db\classes\Db\Advert.php [ 29 ] in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:29
2013-07-30 11:10:02 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(29): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 29, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(66): Db_Advert::add(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:29
2013-07-30 11:11:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: colours ~ APPPATH\views\templates\adverts\new.php [ 159 ] in C:\wamp\www\autogcm\administrator\application\views\templates\adverts\new.php:159
2013-07-30 11:11:14 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\views\templates\adverts\new.php(159): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\aut...', 159, Array)
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
#14 {main} in C:\wamp\www\autogcm\administrator\application\views\templates\adverts\new.php:159
2013-07-30 11:16:46 --- CRITICAL: ErrorException [ 1 ]: Function name must be a string ~ MODPATH\db\classes\Db\Advert.php [ 31 ] in :
2013-07-30 11:16:46 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-07-30 15:01:28 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\templates\photos\content.php [ 16 ] in C:\wamp\www\autogcm\administrator\application\views\templates\photos\content.php:16
2013-07-30 15:01:28 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\views\templates\photos\content.php(16): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\aut...', 16, Array)
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\autogcm\administrator\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photos))
#11 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\autogcm\administrator\application\views\templates\photos\content.php:16
2013-07-30 15:02:09 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\templates\photos\content.php [ 172 ] in C:\wamp\www\autogcm\administrator\application\views\templates\photos\content.php:172
2013-07-30 15:02:09 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\views\templates\photos\content.php(172): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\aut...', 172, Array)
#1 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\autogcm\administrator\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(61): include('C:\wamp\www\aut...')
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\aut...', Array)
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Photos))
#11 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\autogcm\administrator\application\views\templates\photos\content.php:172
2013-07-30 15:06:53 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\vendor\uploadhandler.php [ 39 ] in C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php:39
2013-07-30 15:06:53 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 39, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Files.php(70): UploadHandler->__construct(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Files->action_serverPhotos()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php:39
2013-07-30 15:07:33 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\vendor\uploadhandler.php [ 39 ] in C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php:39
2013-07-30 15:07:33 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 39, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Files.php(70): UploadHandler->__construct(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Files->action_serverphotos()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php:39
2013-07-30 15:08:12 --- CRITICAL: ErrorException [ 8 ]: Undefined index: user_id ~ APPPATH\vendor\uploadhandler.php [ 39 ] in C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php:39
2013-07-30 15:08:12 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php(39): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 39, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Files.php(69): UploadHandler->__construct(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Files->action_serverphotos()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Files))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\application\vendor\uploadhandler.php:39
2013-07-30 22:01:04 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Faq' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-07-30 22:01:04 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :