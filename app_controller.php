<?php
App::import('Vendor','facebook/src/facebook');  

class AppController extends Controller {
	var $helpers 				= array('Html','Javascript','Form','Session');
	var $components 			= array('Auth','Session');
	protected $_AP_KEY 		= '194547823907584';
	protected $_AP_SECRET 		= '94593c9d2872a7a313274a9613ce1919';
	protected $_facebook;
	protected $_fb_session;
	protected $_fb_uid;
	protected $_fb_user;
	protected $_fb_login_url;
	
	function beforeFilter(){		
		
		Configure::write('debug', 2);		
		@mysql_query("SET NAMES utf8");
		if(isset($this->Auth)){
			$this->auth();		
		}
		if(!isset($this->params['admin'])||$this->params['admin']!=1){
			$this->fbInit();
		}
		
	}
 
	private function fbInit(){
				
		$this->_facebook = new Facebook(array('appId'  => $this->_AP_KEY, 
											   'secret' => $this->_AP_SECRET,  
											   'cookie' => true));
		$this->_fb_session = $this->_facebook->getSession();
		
		if(!empty($this->_fb_session)){			
			try{
					
				$this->_fb_uid 	= $this->_facebook->getUser();
				$this->_fb_user = $this->_facebook->api("/me");
				
				if(!empty($this->_fb_user)){				
					if(isset($_GET['installed'])&&$_GET['installed']==1){					
						$this->redirect("http://apps.facebook.com/shutkizator/");
					}
//$this->redirect('https://www.facebook.com/dialog/oauth?client_id=194547823907584&redirect_uri=http://bakuradze.com/shutkizator&scope=publish_stream');
					//$feed = $this->_facebook->api("/me/feed",'post',array('access_token'=>urlencode($this->_fb_session['access_token']),'message'=>'testing graph api: feed posts!!!'));
					
				}
				
				$this->set("fb_user",$this->_fb_user);
				
			}catch(Exception $ex){
			
				$this->Session->setFlash('Facebook Api Error: '.$ex);
			}			
		}else {	
			echo "<script type='text/javascript'>top.location.href = '".$this->_facebook->getLoginUrl(array('req_perms' => 'email,read_stream,publish_stream'))."';</script>";		
		}
	
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
