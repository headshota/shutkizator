<?php
class ShutkCategory extends AppModel {
	var $name = 'ShutkCategory';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'Shutk' => array(
			'className' => 'Shutk',
			'foreignKey' => 'shutk_category_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);
	
	var $validate = array(
		'name'=> array(
			'notEmpty' => array(
				'rule'		=> 'notEmpty',
				'required'	=> true,
				'message'	=> 'Category Name mustn\'t be empty'
			)
		),
		'visible'=> array(
			'boolean' => array(
				'rule' 		=> array('boolean'),
				'message'	=> 'Must be type of boolean'
		))	
	);

}
?>