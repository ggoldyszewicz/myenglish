<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-28 16:53:01 --- EMERGENCY: ErrorException [ 8 ]: Undefined index: username ~ MODPATH/db/classes/Db/User.php [ 19 ] in /home/sources/public_html/my-english.pl/modules/db/classes/Db/User.php:19
2013-09-28 16:53:01 --- DEBUG: #0 /home/sources/public_html/my-english.pl/modules/db/classes/Db/User.php(19): Kohana_Core::error_handler(8, 'Undefined index...', '/home/sources/p...', 19, Array)
#1 /home/sources/public_html/my-english.pl/application/classes/Controller/Users.php(88): Db_User::add(Array)
#2 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Users->action_new()
#3 [internal function]: Kohana_Controller->execute()
#4 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#5 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#8 {main} in /home/sources/public_html/my-english.pl/modules/db/classes/Db/User.php:19