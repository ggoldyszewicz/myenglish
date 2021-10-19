<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-21 00:38:58 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Advert' not found ~ APPPATH\vendor\tcpdf\config\tcpdf_config.php [ 221 ] in :
2013-09-21 00:38:58 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-21 00:40:35 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Advert' not found ~ APPPATH\vendor\tcpdf\config\tcpdf_config.php [ 221 ] in :
2013-09-21 00:40:35 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-21 00:40:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Advert' not found ~ APPPATH\vendor\tcpdf\config\tcpdf_config.php [ 221 ] in :
2013-09-21 00:40:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-21 00:41:47 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Advert' not found ~ APPPATH\vendor\tcpdf\config\tcpdf_config.php [ 221 ] in :
2013-09-21 00:41:47 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-21 00:43:02 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: advert_id ~ APPPATH\classes\Controller\Category.php [ 120 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:120
2013-09-21 00:43:02 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(120): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 120, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:120
2013-09-21 00:48:36 --- CRITICAL: ErrorException [ 2 ]: fopen(http://localhost/my-english-new.pl/files/autogcm_advert_2.pdf): failed to open stream: HTTP wrapper does not support writeable connections ~ APPPATH\vendor\tcpdf\tcpdf.php [ 7642 ] in :
2013-09-21 00:48:36 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(http://lo...', 'C:\wamp\www\my-...', 7642, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(7642): fopen('http://localhos...', 'wb')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(120): TCPDF->Output('http://localhos...', 'F')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-09-21 00:49:05 --- CRITICAL: ErrorException [ 2 ]: fopen(../files/autogcm_advert_2.pdf): failed to open stream: No such file or directory ~ APPPATH\vendor\tcpdf\tcpdf.php [ 7642 ] in :
2013-09-21 00:49:05 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'fopen(../files/...', 'C:\wamp\www\my-...', 7642, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(7642): fopen('../files/autogc...', 'wb')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(120): TCPDF->Output('../files/autogc...', 'F')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in :
2013-09-21 01:18:42 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/tests/content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-21 01:18:42 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/tests...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/tests...', NULL)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Tests.php(17): Kohana_View::factory('templates/tests...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Tests->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tests))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-21 01:21:20 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/tests/content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-21 01:21:20 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/tests...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/tests...', NULL)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Tests.php(17): Kohana_View::factory('templates/tests...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Tests->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tests))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-21 01:21:51 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/tests/content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-21 01:21:51 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/tests...')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/tests...', NULL)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Tests.php(17): Kohana_View::factory('templates/tests...')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Tests->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tests))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php:137
2013-09-21 01:22:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: scripts ~ APPPATH\views\templates\tests\content.php [ 1 ] in C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php:1
2013-09-21 01:22:23 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php(1): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 1, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tests))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php:1
2013-09-21 01:23:42 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\templates\tests\content.php [ 5 ] in C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php:5
2013-09-21 01:23:42 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php(5): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 5, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tests))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php:5
2013-09-21 01:24:51 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: id ~ APPPATH\views\templates\tests\content.php [ 9 ] in C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php:9
2013-09-21 01:24:51 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php(9): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 9, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(228): Kohana_View->render()
#4 C:\wamp\www\my-english-new.pl\application\views\templates\home\index.php(14): Kohana_View->__toString()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(61): include('C:\wamp\www\my-...')
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\my-...', Array)
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#9 [internal function]: Kohana_Controller->execute()
#10 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Tests))
#11 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#12 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#13 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\tests\content.php:9
2013-09-21 05:04:21 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'category' in 'where clause' [ SELECT `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` WHERE `category` IN (25, 1) ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 05:04:21 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `word`.`...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(14): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 05:05:52 --- CRITICAL: Kohana_Exception [ 0 ]: The title property does not exist in the Model_Word class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-21 05:05:52 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('title')
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(18): Kohana_ORM->__get('title')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php:600
2013-09-21 10:59:51 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND' at line 1 [ SELECT `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` WHERE `category_id` IN (25, 1) ORDER BY `id` RAND ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 10:59:51 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `word`.`...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:10 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND()' at line 1 [ SELECT `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` WHERE `category_id` IN (25, 1) ORDER BY `id` RAND() ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:10 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `word`.`...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:11 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND()' at line 1 [ SELECT `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` WHERE `category_id` IN (25, 1) ORDER BY `id` RAND() ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:11 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `word`.`...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:12 --- CRITICAL: Database_Exception [ 1064 ]: You have an error in your SQL syntax; check the manual that corresponds to your MySQL server version for the right syntax to use near 'RAND()' at line 1 [ SELECT `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` WHERE `category_id` IN (25, 1) ORDER BY `id` RAND() ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:12 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `word`.`...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:33 --- CRITICAL: Database_Exception [ 1054 ]: Unknown column 'RAND()' in 'order clause' [ SELECT `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` WHERE `category_id` IN (25, 1) ORDER BY `RAND()` ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:00:33 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT `word`.`...', 'Model_Word', Array)
#1 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\my-english-new.pl\modules\orm\classes\Kohana\ORM.php(1001): Kohana_ORM->_load_result(true)
#3 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(15): Kohana_ORM->find_all()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\my-english-new.pl\modules\database\classes\Kohana\Database\Query.php:251
2013-09-21 11:52:30 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:57
2013-09-21 11:52:30 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(57): Kohana_View->__get('menu')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:57
2013-09-21 11:52:32 --- CRITICAL: Kohana_Exception [ 0 ]: View variable is not set: menu ~ SYSPATH\classes\Kohana\View.php [ 171 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:189
2013-09-21 11:52:32 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(189): Kohana_View->__get('menu')
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:189
2013-09-21 11:53:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: cols ~ APPPATH\vendor\tcpdf\tcpdf.php [ 17808 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:17808
2013-09-21 11:53:06 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(17808): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 17808, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(146): TCPDF->writeHTML('<table>sajhjhjh...', true, false, true, false, '')
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:17808
2013-09-21 12:31:56 --- CRITICAL: ErrorException [ 8 ]: Undefined index: rows ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16753 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16753
2013-09-21 12:31:56 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16753): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16753, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table><tr><td>...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16753
2013-09-21 12:32:10 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:32:10 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 27, false, 23.230416666667)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:33:14 --- CRITICAL: ErrorException [ 8 ]: Undefined index: thead ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16351 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:33:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16351): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16351, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table><tr><td>...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:33:19 --- CRITICAL: ErrorException [ 8 ]: Undefined index: thead ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16351 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:33:19 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16351): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16351, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table><tr><td>...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:33:58 --- CRITICAL: ErrorException [ 8 ]: Undefined index: thead ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16351 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:33:58 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16351): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16351, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table><tr><td>...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:38:42 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:38:42 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 25, false, 27.640138888889)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(160): TCPDF->writeHTML('<table><thead><...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:39:15 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:39:15 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 17, false, 18.820694444444)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(160): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:40:06 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:40:06 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 17, false, 18.820694444444)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(160): TCPDF->writeHTML('<table width="1...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:40:36 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:40:36 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 37, false, 27.640138888889)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(160): TCPDF->writeHTML('<table width="1...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:41:46 --- CRITICAL: ErrorException [ 8 ]: Undefined index: thead ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16351 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:41:46 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16351): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16351, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table width="1...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(160): TCPDF->writeHTML('<table width="1...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:42:02 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:42:02 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 147, false, 76.147083333333)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(160): TCPDF->writeHTML('<table width="1...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:42:59 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:42:59 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 147, false, 76.147083333333)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:43:13 --- CRITICAL: ErrorException [ 8 ]: Undefined index: trids ~ APPPATH\vendor\tcpdf\tcpdf.php [ 19225 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:43:13 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(19225): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 19225, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(18047): TCPDF->closeHTMLTagHandler(Array, 147, false, 76.147083333333)
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:19225
2013-09-21 12:43:30 --- CRITICAL: ErrorException [ 8 ]: Undefined index: thead ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16351 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:43:30 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16351): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16351, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table><tr><td>...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:44:41 --- CRITICAL: ErrorException [ 8 ]: Undefined index: thead ~ APPPATH\vendor\tcpdf\tcpdf.php [ 16351 ] in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 12:44:41 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16351): Kohana_Core::error_handler(8, 'Undefined index...', 'C:\wamp\www\my-...', 16351, Array)
#1 C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php(16989): TCPDF->getHtmlDomArray('<table><tr><td>...')
#2 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(159): TCPDF->writeHTML('<table><tr><td>...', true, false, true, false, '')
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\my-english-new.pl\application\vendor\tcpdf\tcpdf.php:16351
2013-09-21 13:43:25 --- CRITICAL: ErrorException [ 2 ]: array_rand(): Second argument has to be between 1 and the number of elements in the array ~ APPPATH\classes\Controller\Test.php [ 15 ] in :
2013-09-21 13:43:25 --- DEBUG: #0 [internal function]: Kohana_Core::error_handler(2, 'array_rand(): S...', 'C:\wamp\www\my-...', 15, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(15): array_rand(Array, 26)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in :
2013-09-21 13:51:33 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: count_words ~ APPPATH\classes\Controller\Category.php [ 131 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:131
2013-09-21 13:51:33 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(131): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 131, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php:131
2013-09-21 13:52:07 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 49 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:52:07 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 49, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(116): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:53:17 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 9 ~ MODPATH\db\classes\Db\Test.php [ 49 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:53:17 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 49, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Category.php(116): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Category->action_generateTest()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:57:28 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 49 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:57:28 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 49, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:57:31 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 49 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:57:31 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 49, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:57:35 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 49 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:57:35 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 49, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:58:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 49 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:58:43 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(49): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 49, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:49
2013-09-21 13:59:32 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 13:59:32 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:00:52 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:00:52 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:00:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:00:53 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:00:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 8 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:00:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(26): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:12 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:12 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(27): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:14 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(27): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:15 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:15 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(27): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:16 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(27): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:16 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 50 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:01:16 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(50): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 50, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(27): Db_Test::getTest(Array, 4)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:50
2013-09-21 14:22:14 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: 7 ~ APPPATH\classes\Controller\Test.php [ 28 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:28
2013-09-21 14:22:14 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 28, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:28
2013-09-21 14:22:15 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: 7 ~ APPPATH\classes\Controller\Test.php [ 28 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:28
2013-09-21 14:22:15 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 28, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:28
2013-09-21 14:22:16 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: 7 ~ APPPATH\classes\Controller\Test.php [ 28 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:28
2013-09-21 14:22:16 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(28): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 28, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:28
2013-09-21 14:22:23 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:23 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:24 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:24 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:25 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:25 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:25 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:25 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: html ~ APPPATH\classes\Controller\Test.php [ 30 ] in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:22:26 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(30): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 30, Array)
#1 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php:30
2013-09-21 14:28:41 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:41 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:43 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:43 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:44 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:45 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:45 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:45 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:45 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:28:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:51 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:51 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:53 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:53 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:53 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:54 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:55 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:55 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:56 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:56 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:56 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:57 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:57 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:57 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:57 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:58 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:58 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:58 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:58 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:58 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 56 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:29:58 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(56): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 56, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:56
2013-09-21 14:30:18 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 57 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:57
2013-09-21 14:30:18 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 57, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:57
2013-09-21 14:30:20 --- CRITICAL: ErrorException [ 8 ]: Undefined offset: 6 ~ MODPATH\db\classes\Db\Test.php [ 57 ] in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:57
2013-09-21 14:30:20 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php(57): Kohana_Core::error_handler(8, 'Undefined offse...', 'C:\wamp\www\my-...', 57, Array)
#1 C:\wamp\www\my-english-new.pl\application\classes\Controller\Test.php(29): Db_Test::getTest(Array, 7)
#2 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Controller.php(84): Controller_Test->action_index()
#3 [internal function]: Kohana_Controller->execute()
#4 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Test))
#5 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#6 C:\wamp\www\my-english-new.pl\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#7 C:\wamp\www\my-english-new.pl\index.php(118): Kohana_Request->execute()
#8 {main} in C:\wamp\www\my-english-new.pl\modules\db\classes\Db\Test.php:57
2013-09-21 14:43:32 --- CRITICAL: ErrorException [ 1 ]: Maximum execution time of 1000 seconds exceeded ~ MODPATH\db\classes\Db\Test.php [ 54 ] in :
2013-09-21 14:43:32 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-21 14:49:12 --- CRITICAL: ErrorException [ 8 ]: Undefined variable: category_id ~ APPPATH\views\templates\category\category_new_form.php [ 105 ] in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:105
2013-09-21 14:49:12 --- DEBUG: #0 C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php(105): Kohana_Core::error_handler(8, 'Undefined varia...', 'C:\wamp\www\my-...', 105, Array)
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
#14 {main} in C:\wamp\www\my-english-new.pl\application\views\templates\category\category_new_form.php:105
2013-09-21 15:22:38 --- EMERGENCY: ErrorException [ 1 ]: Class 'Model_role' not found ~ MODPATH/orm/classes/Kohana/ORM.php [ 46 ] in :
2013-09-21 15:22:38 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-21 15:24:49 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'Word.deleted' in 'where clause' [ SELECT *, `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` LEFT JOIN `categories` ON (`categories`.`category_id` = `word`.`category_id`) WHERE `categories`.`category_id` = '2' AND `Word`.`deleted` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:24:49 --- DEBUG: #0 /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `word...', 'Model_Word', Array)
#1 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/sources/public_html/my-english.pl/modules/db/classes/Db/Content.php(14): Kohana_ORM->find_all()
#4 /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php(208): Db_Content::getCategoryContent('2')
#5 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Category->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#11 {main} in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:25:05 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'Word.deleted' in 'where clause' [ SELECT *, `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` LEFT JOIN `categories` ON (`categories`.`category_id` = `word`.`category_id`) WHERE `categories`.`category_id` = '2' AND `Word`.`deleted` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:25:05 --- DEBUG: #0 /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `word...', 'Model_Word', Array)
#1 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/sources/public_html/my-english.pl/modules/db/classes/Db/Content.php(14): Kohana_ORM->find_all()
#4 /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php(208): Db_Content::getCategoryContent('2')
#5 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Category->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#11 {main} in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:27:54 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'words.deleted' in 'where clause' [ SELECT *, `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` LEFT JOIN `categories` ON (`categories`.`category_id` = `word`.`category_id`) WHERE `categories`.`category_id` = '2' AND `words`.`deleted` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:27:54 --- DEBUG: #0 /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `word...', 'Model_Word', Array)
#1 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/sources/public_html/my-english.pl/modules/db/classes/Db/Content.php(14): Kohana_ORM->find_all()
#4 /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php(208): Db_Content::getCategoryContent('2')
#5 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Category->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#11 {main} in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:28:03 --- EMERGENCY: Database_Exception [ 1054 ]: Unknown column 'words.deleted' in 'where clause' [ SELECT *, `word`.`id` AS `id`, `word`.`category_id` AS `category_id`, `word`.`word` AS `word`, `word`.`translation` AS `translation`, `word`.`createdby` AS `createdby`, `word`.`deleted` AS `deleted` FROM `words` AS `word` LEFT JOIN `categories` ON (`categories`.`category_id` = `word`.`category_id`) WHERE `categories`.`category_id` = '2' AND `words`.`deleted` = 0 ] ~ MODPATH/database/classes/Kohana/Database/MySQL.php [ 194 ] in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251
2013-09-21 15:28:03 --- DEBUG: #0 /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php(251): Kohana_Database_MySQL->query(1, 'SELECT *, `word...', 'Model_Word', Array)
#1 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1060): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 /home/sources/public_html/my-english.pl/modules/orm/classes/Kohana/ORM.php(1001): Kohana_ORM->_load_result(true)
#3 /home/sources/public_html/my-english.pl/modules/db/classes/Db/Content.php(14): Kohana_ORM->find_all()
#4 /home/sources/public_html/my-english.pl/application/classes/Controller/Category.php(208): Db_Content::getCategoryContent('2')
#5 /home/sources/public_html/my-english.pl/system/classes/Kohana/Controller.php(84): Controller_Category->action_index()
#6 [internal function]: Kohana_Controller->execute()
#7 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client/Internal.php(97): ReflectionMethod->invoke(Object(Controller_Category))
#8 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request/Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 /home/sources/public_html/my-english.pl/system/classes/Kohana/Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 /home/sources/public_html/my-english.pl/index.php(118): Kohana_Request->execute()
#11 {main} in /home/sources/public_html/my-english.pl/modules/database/classes/Kohana/Database/Query.php:251