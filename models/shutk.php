<?php
class Shutk extends AppModel {
	var $name = 'Shutk';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'ShutkCategory' => array(
			'className' => 'ShutkCategory',
			'foreignKey' => 'shutk_category_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	var $validate = array(
	'name'=> array(
		'notEmpty'		=> array(
			'rule' 		=> 'notEmpty',
			'required'	=> true,
			'message' 	=> 'Field mustn\'t be empty!'
		)),
		
	'text'=> array(
		'notEmpty' 		=> array(
			'rule' 		=> 'notEmpty',
			'required'	=> true,
			'message' 	=> 'Field mustn\'t be empty!'
		),
		'range'=>array(
			'rule'		=> array('maxLength',10),
			'message'	=> 'Joke must be not more than 300 characters long.'
		)),
		
	'visible'=> array(
		'boolean' => array(
			'rule' 		=> array('boolean'),
			'message'	=> 'Must be type of boolean'
		)),
	'shutk_category_id' => array(
		'notEmpty' => array(
			'rule' 		=> 'notEmpty',
			'required'	=> true,
			'message'	=> 'Category must be selected for the joke'
		))
	
	);
}
?>