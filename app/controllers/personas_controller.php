<?php
class PersonasController extends AppController {

	var $name = 'Personas';

	function index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid persona', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('persona', $this->Persona->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Persona->create();
			if ($this->Persona->save($this->data)) {
				$this->Session->setFlash(__('The persona has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid persona', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Persona->save($this->data)) {
				$this->Session->setFlash(__('The persona has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The persona could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Persona->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for persona', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Persona->delete($id)) {
			$this->Session->setFlash(__('Persona deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Persona was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
