<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-09-18 09:33:27 --- CRITICAL: Session_Exception [ 1 ]: Error reading session data. ~ SYSPATH\classes\Kohana\Session.php [ 324 ] in C:\wamp\www\rcp\system\classes\Kohana\Session.php:125
2013-09-18 09:33:27 --- DEBUG: #0 C:\wamp\www\rcp\system\classes\Kohana\Session.php(125): Kohana_Session->read(NULL)
#1 C:\wamp\www\rcp\system\classes\Kohana\Session.php(54): Kohana_Session->__construct(NULL, NULL)
#2 C:\wamp\www\rcp\modules\auth\classes\Kohana\Auth.php(58): Kohana_Session::instance('native')
#3 C:\wamp\www\rcp\modules\auth\classes\Kohana\Auth.php(37): Kohana_Auth->__construct(Object(Config_Group))
#4 C:\wamp\www\rcp\application\classes\Controller\Home.php(58): Kohana_Auth::instance()
#5 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(69): Controller_Home->before()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Users))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\rcp\system\classes\Kohana\Session.php:125
2013-09-18 09:39:16 --- CRITICAL: View_Exception [ 0 ]: The requested view templates/users/content could not be found ~ SYSPATH\classes\Kohana\View.php [ 257 ] in C:\wamp\www\rcp\system\classes\Kohana\View.php:137
2013-09-18 09:39:16 --- DEBUG: #0 C:\wamp\www\rcp\system\classes\Kohana\View.php(137): Kohana_View->set_filename('templates/users...')
#1 C:\wamp\www\rcp\system\classes\Kohana\View.php(30): Kohana_View->__construct('templates/users...', NULL)
#2 C:\wamp\www\rcp\application\classes\Controller\Employees.php(17): Kohana_View::factory('templates/users...')
#3 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_index()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\rcp\system\classes\Kohana\View.php:137
2013-09-18 10:24:35 --- CRITICAL: ErrorException [ 4096 ]: Argument 3 passed to Kohana_Form::input() must be of the type array, string given, called in C:\wamp\www\rcp\application\views\templates\employees\new.php on line 151 and defined ~ SYSPATH\classes\Kohana\Form.php [ 93 ] in C:\wamp\www\rcp\system\classes\Kohana\Form.php:93
2013-09-18 10:24:35 --- DEBUG: #0 C:\wamp\www\rcp\system\classes\Kohana\Form.php(93): Kohana_Core::error_handler(4096, 'Argument 3 pass...', 'C:\wamp\www\rcp...', 93, Array)
#1 C:\wamp\www\rcp\application\views\templates\employees\new.php(151): Kohana_Form::input('to', Array, '1.000')
#2 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#3 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\rcp\application\views\templates\home\index.php(14): Kohana_View->__toString()
#6 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#7 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#8 C:\wamp\www\rcp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#12 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\rcp\system\classes\Kohana\Form.php:93
2013-09-18 10:40:55 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Year' not found ~ APPPATH\classes\Controller\Employees.php [ 49 ] in :
2013-09-18 10:40:55 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 10:41:02 --- CRITICAL: ErrorException [ 1 ]: Class 'Db_Year' not found ~ APPPATH\classes\Controller\Employees.php [ 49 ] in :
2013-09-18 10:41:02 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 11:04:26 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_users_additional' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-09-18 11:04:26 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 11:04:50 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:04:50 --- DEBUG: #0 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(23): Kohana_ORM->save()
#3 C:\wamp\www\rcp\application\classes\Controller\Employees.php(49): Db_Employee::addEmployee(Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:05:33 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Users_Additional' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-09-18 11:05:33 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 11:07:10 --- CRITICAL: ErrorException [ 1 ]: Class 'Model_Contract' not found ~ MODPATH\orm\classes\Kohana\ORM.php [ 46 ] in :
2013-09-18 11:07:10 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 11:08:09 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:08:09 --- DEBUG: #0 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(23): Kohana_ORM->save()
#3 C:\wamp\www\rcp\application\classes\Controller\Employees.php(49): Db_Employee::addEmployee(Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:29:19 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH\classes\Controller\Check.php [ 39 ] in C:\wamp\www\rcp\application\classes\Controller\Check.php:39
2013-09-18 11:29:19 --- DEBUG: #0 C:\wamp\www\rcp\application\classes\Controller\Check.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\rcp...', 39, Array)
#1 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Check->action_checkUniqueUsername()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\rcp\application\classes\Controller\Check.php:39
2013-09-18 11:35:39 --- CRITICAL: ErrorException [ 8 ]: Undefined property: stdClass::$id ~ APPPATH\classes\Controller\Check.php [ 39 ] in C:\wamp\www\rcp\application\classes\Controller\Check.php:39
2013-09-18 11:35:39 --- DEBUG: #0 C:\wamp\www\rcp\application\classes\Controller\Check.php(39): Kohana_Core::error_handler(8, 'Undefined prope...', 'C:\wamp\www\rcp...', 39, Array)
#1 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Check->action_checkUniqueUsername()
#2 [internal function]: Kohana_Controller->execute()
#3 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#4 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#5 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#6 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#7 {main} in C:\wamp\www\rcp\application\classes\Controller\Check.php:39
2013-09-18 11:56:52 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:56:52 --- DEBUG: #0 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(23): Kohana_ORM->save()
#3 C:\wamp\www\rcp\application\classes\Controller\Employees.php(49): Db_Employee::addEmployee(Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:57:18 --- CRITICAL: ORM_Validation_Exception [ 0 ]: Failed to validate array ~ MODPATH\orm\classes\Kohana\ORM.php [ 1272 ] in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 11:57:18 --- DEBUG: #0 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1299): Kohana_ORM->check(NULL)
#1 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->create(NULL)
#2 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(23): Kohana_ORM->save()
#3 C:\wamp\www\rcp\application\classes\Controller\Employees.php(49): Db_Employee::addEmployee(Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:1299
2013-09-18 12:08:03 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:08:03 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\rcp...', 461, Array)
#1 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(stdClass))
#2 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#6 C:\wamp\www\rcp\application\classes\Controller\Check.php(40): Kohana_ORM->find()
#7 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Check->action_checkUniqueUsername()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#10 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:09:39 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:09:39 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\rcp...', 461, Array)
#1 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(stdClass))
#2 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#6 C:\wamp\www\rcp\application\classes\Controller\Check.php(40): Kohana_ORM->find()
#7 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Check->action_checkUniqueUsername()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#10 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:09:42 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:09:42 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\rcp...', 461, Array)
#1 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(stdClass))
#2 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#6 C:\wamp\www\rcp\application\classes\Controller\Check.php(40): Kohana_ORM->find()
#7 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Check->action_checkUniqueUsername()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#10 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:10:01 --- CRITICAL: ErrorException [ 4096 ]: Object of class stdClass could not be converted to string ~ MODPATH\database\classes\Kohana\Database.php [ 461 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:10:01 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php(461): Kohana_Core::error_handler(4096, 'Object of class...', 'C:\wamp\www\rcp...', 461, Array)
#1 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder.php(116): Kohana_Database->quote(Object(stdClass))
#2 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query\Builder\Select.php(372): Kohana_Database_Query_Builder->_compile_conditions(Object(Database_MySQL), Array)
#3 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(234): Kohana_Database_Query_Builder_Select->compile(Object(Database_MySQL))
#4 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1069): Kohana_Database_Query->execute(Object(Database_MySQL))
#5 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(976): Kohana_ORM->_load_result(false)
#6 C:\wamp\www\rcp\application\classes\Controller\Check.php(40): Kohana_ORM->find()
#7 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Check->action_checkUniqueUsername()
#8 [internal function]: Kohana_Controller->execute()
#9 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Check))
#10 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#11 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#12 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#13 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database.php:461
2013-09-18 12:49:56 --- CRITICAL: Kohana_Exception [ 0 ]: The name property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:600
2013-09-18 12:49:56 --- DEBUG: #0 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('name')
#1 C:\wamp\www\rcp\application\views\templates\employees\new.php(27): Kohana_ORM->__get('name')
#2 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#3 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\rcp\application\views\templates\home\index.php(14): Kohana_View->__toString()
#6 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#7 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#8 C:\wamp\www\rcp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#12 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:600
2013-09-18 12:50:49 --- CRITICAL: Kohana_Exception [ 0 ]: The from property does not exist in the Model_User class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:600
2013-09-18 12:50:49 --- DEBUG: #0 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('from')
#1 C:\wamp\www\rcp\application\views\templates\employees\new.php(134): Kohana_ORM->__get('from')
#2 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#3 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\View.php(228): Kohana_View->render()
#5 C:\wamp\www\rcp\application\views\templates\home\index.php(14): Kohana_View->__toString()
#6 C:\wamp\www\rcp\system\classes\Kohana\View.php(61): include('C:\wamp\www\rcp...')
#7 C:\wamp\www\rcp\system\classes\Kohana\View.php(348): Kohana_View::capture('C:\wamp\www\rcp...', Array)
#8 C:\wamp\www\rcp\system\classes\Kohana\Controller\Template.php(44): Kohana_View->render()
#9 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(87): Kohana_Controller_Template->after()
#10 [internal function]: Kohana_Controller->execute()
#11 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#12 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#13 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#14 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#15 {main} in C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php:600
2013-09-18 12:59:49 --- CRITICAL: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\Controller\Employees.php [ 39 ] in :
2013-09-18 12:59:49 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 13:00:07 --- CRITICAL: ErrorException [ 1 ]: Call to a member function has() on a non-object ~ APPPATH\classes\Controller\Employees.php [ 39 ] in :
2013-09-18 13:00:07 --- DEBUG: #0 [internal function]: Kohana_Core::shutdown_handler()
#1 {main} in :
2013-09-18 13:51:22 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '9-4' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('9', '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php:251
2013-09-18 13:51:22 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\rcp\application\classes\Controller\Employees.php(57): Db_Employee::update(Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php:251
2013-09-18 13:55:16 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '9-4' for key 'PRIMARY' [ INSERT INTO `roles_users` (`user_id`, `role_id`) VALUES ('9', '4') ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php:251
2013-09-18 13:55:16 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(2, 'INSERT INTO `ro...', false, Array)
#1 C:\wamp\www\rcp\modules\orm\classes\Kohana\ORM.php(1574): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(58): Kohana_ORM->add('roles', Object(Model_Role))
#3 C:\wamp\www\rcp\application\classes\Controller\Employees.php(57): Db_Employee::update(Array)
#4 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#5 [internal function]: Kohana_Controller->execute()
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#8 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#9 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#10 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php:251
2013-09-18 14:11:14 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry 'admin' for key 'uniq_username' [ UPDATE `users` SET `username` = 'admin', `email` = '74@wp.pl' WHERE `id` = 9 ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php:251
2013-09-18 14:11:14 --- DEBUG: #0 C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `users` ...', false, Array)
#1 C:\wamp\www\rcp\modules\db\classes\Db\Employee.php(89): Kohana_Database_Query->execute()
#2 C:\wamp\www\rcp\application\classes\Controller\Employees.php(57): Db_Employee::update(Array)
#3 C:\wamp\www\rcp\system\classes\Kohana\Controller.php(84): Controller_Employees->action_new()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\rcp\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Employees))
#6 C:\wamp\www\rcp\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\rcp\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\rcp\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\rcp\modules\database\classes\Kohana\Database\Query.php:251