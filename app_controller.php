<?php
class AppController extends Controller {
	var $helpers = array('Html','Javascript','Form','Session');
//	var $components = array('Auth');
	
	function beforeFilter(){
		Configure::write('debug',2);
		if(isset($this->params['admin'])) 
		{    			
			$this->layout = 'default';			
		} 
	
	}
}
