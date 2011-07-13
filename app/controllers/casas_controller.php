<?php
class CasasController extends AppController {

	var $name = 'Casas';

	function index() {
		$this->Casa->recursive = 0;
		$this->set('casas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid casa', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('casa', $this->Casa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Casa->create();
			if ($this->Casa->save($this->data)) {
				$this->Session->setFlash(__('The casa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casa could not be saved. Please, try again.', true));
			}
		}
		$paises = $this->Casa->Paises->find('list');
		$estados = $this->Casa->Estado->find('list');
		Debug($estados);
		$municipios = $this->Casa->Municipio->find('list');
		$this->set(compact('paises', 'estados', 'municipios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid casa', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Casa->save($this->data)) {
				$this->Session->setFlash(__('The casa has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The casa could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Casa->read(null, $id);
		}
		$paises = $this->Casa->Paises->find('list');
		$estados = $this->Casa->Estado->find('list');
		$municipios = $this->Casa->Municipio->find('list');
		$this->set(compact('paises', 'estados', 'municipios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for casa', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Casa->delete($id)) {
			$this->Session->setFlash(__('Casa deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Casa was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
