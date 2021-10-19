<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2016-03-15 23:27:23 --- EMERGENCY: Database_Exception [ 8192 ]: mysql_connect(): The mysql extension is deprecated and will be removed in the future: use mysqli or PDO instead ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 67 ] in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/MySQL.php:171
2016-03-15 23:27:23 --- DEBUG: #0 /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/MySQL.php(171): Kohana_Database_MySQL->connect()
#1 /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/MySQL.php(358): Kohana_Database_MySQL->query(1, 'SHOW FULL COLUM...', false)
#2 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1665): Kohana_Database_MySQL->list_columns('users')
#3 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(441): Kohana_ORM->list_columns()
#4 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(386): Kohana_ORM->reload_columns()
#5 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(254): Kohana_ORM->_initialize()
#6 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(46): Kohana_ORM->__construct(NULL)
#7 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/Auth/ORM.php(75): Kohana_ORM::factory('User')
#8 /home/sources/public_html/my-english.pl/modules/auth/classes/Kohana/Auth.php(92): Kohana_Auth_ORM->_login('test', 'a', false)
#9 /home/sources/public_html/my-english.pl/application/classes/Controller/Authorization.php(72): Kohana_Auth->login('test', 'a')
#10 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Authorization->action_login()
#11 [internal function]: Kohana_Controller->execute()
#12 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Authorization))
#13 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#14 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#15 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#16 {main} in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/MySQL.php:171