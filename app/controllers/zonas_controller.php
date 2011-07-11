<?php
class ZonasController extends AppController {

	var $name = 'Zonas';

	function index() {
		$this->Zona->recursive = 0;
		$this->set('zonas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid zona', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('zona', $this->Zona->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Zona->create();
			if ($this->Zona->save($this->data)) {
				$this->Session->setFlash(__('The zona has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zona could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid zona', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Zona->save($this->data)) {
				$this->Session->setFlash(__('The zona has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The zona could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Zona->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for zona', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Zona->delete($id)) {
			$this->Session->setFlash(__('Zona deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Zona was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
