<?php
class TipoimagesController extends AppController {

	var $name = 'Tipoimages';

	function index() {
		$this->Tipoimage->recursive = 0;
		$this->set('tipoimages', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tipoimage', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tipoimage', $this->Tipoimage->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tipoimage->create();
			if ($this->Tipoimage->save($this->data)) {
				$this->Session->setFlash(__('The tipoimage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoimage could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tipoimage', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tipoimage->save($this->data)) {
				$this->Session->setFlash(__('The tipoimage has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tipoimage could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tipoimage->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tipoimage', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tipoimage->delete($id)) {
			$this->Session->setFlash(__('Tipoimage deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tipoimage was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
