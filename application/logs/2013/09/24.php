<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-24 10:34:28 --- EMERGENCY: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH/classes/Kohana/View.php [ 171 ] in /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php:202
2013-09-24 10:34:28 --- DEBUG: #0 /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php(202): Kohana_View->__get('menu')
#1 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#7 {main} in /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php:202