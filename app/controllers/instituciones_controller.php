<?php
class InstitucionesController extends AppController {

	var $name = 'Instituciones';

	function index() {
		$this->Institucion->recursive = 0;
		$this->set('instituciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid institucion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('institucion', $this->Institucion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Institucion->create();
			if ($this->Institucion->save($this->data)) {
				$this->Session->setFlash(__('The institucion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institucion could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->Institucion->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid institucion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Institucion->save($this->data)) {
				$this->Session->setFlash(__('The institucion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The institucion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Institucion->read(null, $id);
		}
		$albergados = $this->Institucion->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for institucion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Institucion->delete($id)) {
			$this->Session->setFlash(__('Institucion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Institucion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
