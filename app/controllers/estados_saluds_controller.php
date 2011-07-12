<?php
class EstadosSaludsController extends AppController {

	var $name = 'EstadosSaluds';

	function index() {
		$this->EstadosSalud->recursive = 0;
		$this->set('estadosSaluds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid estados salud', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadosSalud', $this->EstadosSalud->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EstadosSalud->create();
			if ($this->EstadosSalud->save($this->data)) {
				$this->Session->setFlash(__('The estados salud has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estados salud could not be saved. Please, try again.', true));
			}
		}
		$personas = $this->EstadosSalud->Persona->find('list');
		$otrasEnfermedades = $this->EstadosSalud->OtraEnfermedad->find('list');
		$this->set(compact('personas', 'otrasEnfermedades'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid estados salud', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EstadosSalud->save($this->data)) {
				$this->Session->setFlash(__('The estados salud has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The estados salud could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EstadosSalud->read(null, $id);
		}
		$personas = $this->EstadosSalud->Persona->find('list');
		$otraEnfermedads = $this->EstadosSalud->OtraEnfermedad->find('list');
		$this->set(compact('personas', 'otraEnfermedads'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for estados salud', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EstadosSalud->delete($id)) {
			$this->Session->setFlash(__('Estados salud deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Estados salud was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
