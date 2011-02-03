<?php
class ShutksController extends AppController {

	var $name = 'Shutks';
	var $components = array( 'RequestHandler' );
	


	function view() {	
		$this->layout = 'ajax';
		$randomShutk = $this->Shutk->find('all',array('order'=>array('RAND()'),'limit'=>1));
		$this->set('shutk', $randomShutk[0]);
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