<?php
class ShutksController extends AppController {

	var $name 			= 'Shutks';
	var $components 	= array( 'RequestHandler' );
	var $helpers 		= array('Html','Form','Session','Javascript','Text');
	var $paginate = array('limit' => 10, 'page' => 1); 
	
	
	function beforeFilter(){
		parent::beforeFilter();
		Configure::write("debug",2);
		//debug($this->_facebook);
		$session=$this->_facebook->getSession();
		//debug($session);
		/* try {
			$uid = $this->_facebook->getUser();
			$me = $this->_facebook->api('/me');
		} catch (FacebookApiException $e) {
		echo $e;
			error_log($e);
		} */
		
		
	}
	function view() {		
		if($this->Session->read('shutk_id')){	
			$randomShutk = $this->Shutk->find('all',array('conditions' => array('Shutk.id <>' => $this->Session->read('shutk_id'),'Shutk.visible'=>1),'order'=>array('RAND()'),'limit'=>1,'recursive'=>-1));	
		}else {
			$randomShutk = $this->Shutk->find('all',array('conditions'=>array('Shutk.visible'=>1),'order'=>array('RAND()'),'limit'=>1,'recursive'=>-1));	
		}		
		
		$shutk = $randomShutk[0];
		$this->set('view_postback', true);
		$this->set('shutk', $shutk);
		$this->Session->write('shutk_id', $shutk['Shutk']['id']);
		$this->layout = 'public';
		$this->render('/pages/home');	
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