<?php defined('SYSPATH') OR die('No direct script access.'); ?>

2013-08-02 12:21:42 --- CRITICAL: Database_Exception [ 1062 ]: Duplicate entry '0' for key 'PRIMARY' [ UPDATE `adverts` SET `id` = NULL WHERE `id` = '8' ] ~ MODPATH\database\classes\Kohana\Database\MySQL.php [ 194 ] in C:\wamp\www\autogcm\administrator\modules\database\classes\Kohana\Database\Query.php:251
2013-08-02 12:21:42 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\database\classes\Kohana\Database\Query.php(251): Kohana_Database_MySQL->query(3, 'UPDATE `adverts...', false, Array)
#1 C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php(1391): Kohana_Database_Query->execute(Object(Database_MySQL))
#2 C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php(1418): Kohana_ORM->update(NULL)
#3 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(102): Kohana_ORM->save()
#4 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(86): Db_Advert::cloneAdvert(8)
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_clone()
#6 [internal function]: Kohana_Controller->execute()
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#8 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#9 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#10 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#11 {main} in C:\wamp\www\autogcm\administrator\modules\database\classes\Kohana\Database\Query.php:251
2013-08-02 12:27:45 --- CRITICAL: Kohana_Exception [ 0 ]: The colour_selected property does not exist in the Model_Advert class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 12:27:45 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('colour_selected')
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(115): Kohana_ORM->__get('colour_selected')
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(86): Db_Advert::cloneAdvert(8)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_clone()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 12:31:45 --- CRITICAL: Kohana_Exception [ 0 ]: The comma_separated property does not exist in the Model_Advert class ~ MODPATH\orm\classes\Kohana\ORM.php [ 684 ] in C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php:600
2013-08-02 12:31:45 --- DEBUG: #0 C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php(600): Kohana_ORM->get('comma_separated')
#1 C:\wamp\www\autogcm\administrator\modules\db\classes\Db\Advert.php(121): Kohana_ORM->__get('comma_separated')
#2 C:\wamp\www\autogcm\administrator\application\classes\Controller\Adverts.php(86): Db_Advert::cloneAdvert(8)
#3 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Controller.php(84): Controller_Adverts->action_clone()
#4 [internal function]: Kohana_Controller->execute()
#5 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client\Internal.php(97): ReflectionMethod->invoke(Object(Controller_Adverts))
#6 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request\Client.php(114): Kohana_Request_Client_Internal->execute_request(Object(Request), Object(Response))
#7 C:\wamp\www\autogcm\administrator\system\classes\Kohana\Request.php(990): Kohana_Request_Client->execute(Object(Request))
#8 C:\wamp\www\autogcm\administrator\index.php(118): Kohana_Request->execute()
#9 {main} in C:\wamp\www\autogcm\administrator\modules\orm\classes\Kohana\ORM.php:600