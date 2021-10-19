<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Brands_Model extends ORM 
{
    protected $_rules = array(
        'id' => array(
            'not_empty'  => NULL,
            'min_length' => array(1),
            'max_length' => array(11),
        ),
        'brand_id' => array(
            'not_empty'  => NULL,
            'min_length' => array(1),
            'max_length' => array(11),
        ),
        'name' => array(
            'not_empty'  => NULL,
            'min_length' => array(1),
            'max_length' => array(255),
        ),
    );	
}