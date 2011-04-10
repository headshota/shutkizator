<?php
class User extends AppModel {
	var $name = 'User';
	var $displayField = 'username';
	public $belongsTo = array(
		'UserGroup' => array(
			'className' => 'UserGroup',
			'foreignKey' => 'user_group_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>