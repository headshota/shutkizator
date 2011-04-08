<?php
class ShutksController extends AppController {

	var $name 			= 'Shutks';
	var $components 	= array( 'RequestHandler' );
	var $helpers 		= array('Html','Form','Session','Javascript','Text');
	var $paginate = array('limit' => 10, 'page' => 1,'order'=>'Shutk.id DESC'); 
	
	
	function beforeFilter(){
		parent::beforeFilter();
		Configure::write("debug",2);
	
		
		
	}
	function view($id = null) {
		if(!empty($id)){
		$shutk = $this->Shutk->find('all',array('conditions' => array('Shutk.id' => $id),'limit'=>1,'recursive'=>-1));	
		if(empty($shutk)){
			$this->redirect(array('action' => 'view'));
		}
		}else {
			$shutk = $this->Shutk->find('all',array('order'=>array('RAND()'),'limit'=>1,'recursive'=>-1));	
			$shutkId = $shutk[0]['Shutk']['id'];	
			$this->redirect(array('action' => 'view/'.$shutkId));
		}			
		
		$this->set('view_postback', true);
		$this->set('shutk', $shutk[0]);
		$this->Session->write('shutk_id', $shutk[0]['Shutk']['id']);
		$this->layout = 'public';
		$this->render('/pages/home');	
	}
	
	function feed($id){
		if(!empty($id)&&is_numeric($id)){
			$this->data = $this->Shutk->read(null, $id);			
			try{
			$this->_facebook->api('/me/feed','post',array('access_token'=>urlencode($this->_fb_session['access_token']),'message'=>strip_tags($this->data['Shutk']['name'].': '.$this->data['Shutk']['text'].' (shared from Shutkizator)')));
			}catch(Exception $ex){
			$this->Session->setFlash('მოხდა შეცდომა: '.$ex);
			$this->redirect('/shutks/view/'.$id);
			}
			$this->Session->setFlash('შუტკა დაიპოსტა თქვენს კედელზე!');
			$this->redirect('/shutks/view/'.$id);
		}	
	}

	function contribute() {
		if (!empty($this->data)) {
			$this->Shutk->create();
			if ($this->Shutk->save($this->data)) {
				$this->Session->setFlash(__('The shutk has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk could not be saved. Please, try again.', true));
			}
		}
		$shutkCategories = $this->Shutk->ShutkCategory->find('list');
		$this->set(compact('shutkCategories'));
	}

	function admin_index() {
		$this->Shutk->recursive = 0;
		$this->set('shutks', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid shutk', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shutk', $this->Shutk->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->Shutk->create();
			if ($this->Shutk->save($this->data)) {
				$this->Session->setFlash(__('The shutk has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk could not be saved. Please, try again.', true));
			}
		}
		$shutkCategories = $this->Shutk->ShutkCategory->find('list');
		$this->set(compact('shutkCategories'));
	}

	function admin_edit($id = null) {
		//$this->Shutk->query("SET NAMES utf8");
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid shutk', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Shutk->save($this->data)) {
				$this->Session->setFlash(__('The shutk has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Shutk->read(null, $id);
			$this->data['Shutk']['text'] = preg_replace("/<br.+\/>/","",$this->data['Shutk']['text']);			
			
		}
		$shutkCategories = $this->Shutk->ShutkCategory->find('list');
		
		$this->set(compact('shutkCategories'));
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for shutk', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Shutk->delete($id)) {
			$this->Session->setFlash(__('Shutk deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Shutk was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>