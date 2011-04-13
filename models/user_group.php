<?php
class UserGroup extends AppModel {
	var $name = 'UserGroup';
	var $displayField = 'name';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	var $actsAs = array('Acl' => array('type' => 'requester'));

	var $hasMany = array(
		'User' => array(
			'className' => 'User',
			'foreignKey' => 'user_group_id',
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
	
	/*
	* Method for acl component to get parent node
	*/
	
	function parentNode() {
    if (!$this->id && empty($this->data)) {
        return null;
    }
    if (isset($this->data['User']['group_id'])) {
	$groupId = $this->data['User']['group_id'];
    } else {
    	$groupId = $this->field('group_id');
    }
    if (!$groupId) {
	return null;
    } else {
        return array('Group' => array('id' => $groupId));
    }
}

}