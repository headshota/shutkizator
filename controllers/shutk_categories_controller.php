<?php
class ShutkCategoriesController extends AppController {

	var $name = 'ShutkCategories';

	function index() {
		$this->ShutkCategory->recursive = 0;
		$this->set('shutkCategories', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid shutk category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shutkCategory', $this->ShutkCategory->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->ShutkCategory->create();
			if ($this->ShutkCategory->save($this->data)) {
				$this->Session->setFlash(__('The shutk category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk category could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid shutk category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ShutkCategory->save($this->data)) {
				$this->Session->setFlash(__('The shutk category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ShutkCategory->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for shutk category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ShutkCategory->delete($id)) {
			$this->Session->setFlash(__('Shutk category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Shutk category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	function admin_index() {
		$this->ShutkCategory->recursive = 0;
		$this->set('shutkCategories', $this->paginate());
	}

	function admin_view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid shutk category', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('shutkCategory', $this->ShutkCategory->read(null, $id));
	}

	function admin_add() {
		if (!empty($this->data)) {
			$this->ShutkCategory->create();
			if ($this->ShutkCategory->save($this->data)) {
				$this->Session->setFlash(__('The shutk category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk category could not be saved. Please, try again.', true));
			}
		}
	}

	function admin_edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid shutk category', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->ShutkCategory->save($this->data)) {
				$this->Session->setFlash(__('The shutk category has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The shutk category could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->ShutkCategory->read(null, $id);
		}
	}

	function admin_delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for shutk category', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->ShutkCategory->delete($id)) {
			$this->Session->setFlash(__('Shutk category deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Shutk category was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>