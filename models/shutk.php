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
}
?>