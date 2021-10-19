<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Categorie extends ORM 
{
	protected $_rules = array(
		'category_id' => array(
		    'not_empty'  => NULL,
		    'min_length' => array(1),
		    'max_length' => array(10),
		),
		'parent_id' => array(
		    'min_length' => array(1),
		    'max_length' => array(10),
		),
		'title' => array(
		    'not_empty'  => NULL,
		    'min_length' => array(1),
		    'max_length' => array(255),
		),
		'description' => array(
		    'min_length' => array(1),
		    'max_length' => array(255),
		),
			'owner' => array(
		    
		),
			'position' => array(
		    
		),		
	    );

	protected $_has_many = array
	(
		'words' => array('model' => 'word'),
	);    
}