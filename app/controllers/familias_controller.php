<?php
class FamiliasController extends AppController {

	var $name = 'Familias';

	function index() {
		$this->Familia->recursive = 0;
		$this->set('familias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid familia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('familia', $this->Familia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Familia->create();
			if ($this->Familia->save($this->data)) {
				$this->Session->setFlash(__('The familia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The familia could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->Familia->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid familia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Familia->save($this->data)) {
				$this->Session->setFlash(__('The familia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The familia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Familia->read(null, $id);
		}
		$albergados = $this->Familia->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for familia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Familia->delete($id)) {
			$this->Session->setFlash(__('Familia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Familia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
