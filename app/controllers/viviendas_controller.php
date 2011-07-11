<?php
class ViviendasController extends AppController {

	var $name = 'Viviendas';

	function index() {
		$this->Vivienda->recursive = 0;
		$this->set('viviendas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid vivienda', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vivienda', $this->Vivienda->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vivienda->create();
			if ($this->Vivienda->save($this->data)) {
				$this->Session->setFlash(__('The vivienda has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vivienda could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid vivienda', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vivienda->save($this->data)) {
				$this->Session->setFlash(__('The vivienda has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vivienda could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vivienda->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for vivienda', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vivienda->delete($id)) {
			$this->Session->setFlash(__('Vivienda deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vivienda was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
