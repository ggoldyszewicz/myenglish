<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Users_Permission extends ORM 
{
    protected $_rules = array(
        'user_id' => array(
            'not_empty'  => NULL,
            'min_length' => array(1),
            'max_length' => array(11),
        ),
        'permission_id' => array(
            'min_length' => array(1),
            'max_length' => array(11),
        ),            
    );		
}