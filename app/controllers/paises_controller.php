<?php
class PaisesController extends AppController {

	var $name = 'Paises';

	function index() {
		$this->Pais->recursive = 0;
		$this->set('paises', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid pais', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('pais', $this->Pais->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Pais->create();
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The pais has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pais could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid pais', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Pais->save($this->data)) {
				$this->Session->setFlash(__('The pais has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The pais could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Pais->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for pais', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Pais->delete($id)) {
			$this->Session->setFlash(__('Pais deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Pais was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
