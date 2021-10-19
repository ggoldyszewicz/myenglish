<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-07-29 00:02:30 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, boolean given ~ MODPATH\db\classes\Db\Advert.php [ 121 ] in :
2013-07-29 00:02:30 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\wamp\www\aut...', 121, Array)
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(121): array_keys(true)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(62): Db_Advert::update(Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-29 01:20:02 --- CRITICAL: ErrorException [ 8 ]: Trying to get property of non-object ~ MODPATH\db\classes\Db\Advert.php [ 134 ] in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:134
2013-07-29 01:20:02 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(134): Kohana_Core::error_handler(8, 'Trying to get p...', 'C:\wamp\www\aut...', 134, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(62): Db_Advert::update(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:134
2013-07-29 15:11:48 --- CRITICAL: ErrorException [ 8 ]: Undefined index: version_id ~ MODPATH\db\classes\Db\Advert.php [ 15 ] in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:15
2013-07-29 15:11:48 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(15): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\aut...', 15, Array)
#1 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(66): Db_Advert::add(Array)
#2 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php:15
2013-07-29 15:14:12 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, boolean given ~ MODPATH\db\classes\Db\Advert.php [ 44 ] in :
2013-07-29 15:14:12 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\wamp\www\aut...', 44, Array)
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(44): array_keys(true)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(66): Db_Advert::add(Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-29 15:18:02 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, boolean given ~ MODPATH\db\classes\Db\Advert.php [ 44 ] in :
2013-07-29 15:18:02 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\wamp\www\aut...', 44, Array)
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(44): array_keys(true)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(66): Db_Advert::add(Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-07-29 15:19:24 --- CRITICAL: ErrorException [ 2 ]: array_keys() expects parameter 1 to be array, boolean given ~ MODPATH\db\classes\Db\Advert.php [ 44 ] in :
2013-07-29 15:19:24 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_keys() ex...', 'C:\wamp\www\aut...', 44, Array)
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(44): array_keys(false)
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(66): Db_Advert::add(Array)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in :