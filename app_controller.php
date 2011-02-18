<?php
App::import('Vendor','facebook/src/facebook');  

class AppController extends Controller {
	var $helpers 				= array('Html','Javascript','Form','Session');
	var $components 			= array('Auth','Session');
	protected $_AP_KEY 		= '194547823907584';
	protected $_AP_SECRET 		= '924d87db0e7bc7948c7d40ee5ecb6f4d';
	protected $_facebook;
	
	function beforeFilter(){		
		//testing
		Configure::write('debug', 0);		
		@mysql_query("SET NAMES utf8");
		if(isset($this->Auth)){
			$this->auth();		
		}
		
		$this->_facebook = new Facebook(array('appId'  => $this->_AP_KEY, 'secret' => $this->_AP_SECRET,  'cookie' => true,'domain' => 'bakuradze.com'));

	}
 

	private function auth(){	
		$this->Auth->loginAction = array('controller' => 'users', 'action' => 'login');
	    $this->Auth->loginRedirect = array('controller' => 'shutks', 'action' => 'admin/index');
	//	$this->Auth->autoRedirect = false;
	//	$this->Auth->authorize = 'controller';
		$this->Auth->allow('index', 'view','home','display');
	}
 
    function beforeRender () {
        $admin = Configure::read('Routing.admin'); 
        if (isset($this->params[$admin]) && $this->params[$admin]) {
            $this->layout = 'default';
        }
    }
}
