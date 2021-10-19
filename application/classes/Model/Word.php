<?php defined('SYSPATH') or die('No direct access allowed.');

class Model_Word extends ORM 
{
	protected $_rules = array(
		'id' => array(
			'not_empty'  => NULL,
			'min_length' => array(1),
			'max_length' => array(11),
		),
		'category_id' => array(
		    'not_empty'  => NULL,
		    'min_length' => array(1),
		    'max_length' => array(10),
		),		
		'word' => array(
			'not_empty'  => NULL,
			'min_length' => array(1),
			'max_length' => array(10),
		),
		'translation' => array(
			'not_empty'  => NULL,
			'min_length' => array(1),
			'max_length' => array(255),
		),
		'createdby' => array(
			'not_empty'  => NULL,
			'min_length' => array(1),
			'max_length' => array(11),
		),		
	    );

	protected $_belongs_to = array
	(
		'categories' => array('model' => 'categorie')
	);
	
}