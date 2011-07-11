<?php
class OtraEnfermedadsController extends AppController {

	var $name = 'OtraEnfermedads';

	function index() {
		$this->OtraEnfermedad->recursive = 0;
		$this->set('otraEnfermedads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid otra enfermedad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('otraEnfermedad', $this->OtraEnfermedad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->OtraEnfermedad->create();
			if ($this->OtraEnfermedad->save($this->data)) {
				$this->Session->setFlash(__('The otra enfermedad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The otra enfermedad could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid otra enfermedad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OtraEnfermedad->save($this->data)) {
				$this->Session->setFlash(__('The otra enfermedad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The otra enfermedad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OtraEnfermedad->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for otra enfermedad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OtraEnfermedad->delete($id)) {
			$this->Session->setFlash(__('Otra enfermedad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Otra enfermedad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
