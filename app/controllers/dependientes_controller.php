<?php
class DependientesController extends AppController {

	var $name = 'Dependientes';

	function index() {
		$this->Dependiente->recursive = 0;
		$this->set('dependientes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dependiente', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dependiente', $this->Dependiente->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dependiente->create();
			if ($this->Dependiente->save($this->data)) {
				$this->Session->setFlash(__('The dependiente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependiente could not be saved. Please, try again.', true));
			}
		}
		$personas = $this->Dependiente->Persona->find('list');
		//$albergados = $this->Dependiente->Albergado->find('list', array('fields' => array('Albergado.persona_id')));
		Debug($this->Dependiente->Albergado->find('list'));
		$this->set(compact('personas', 'albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dependiente', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dependiente->save($this->data)) {
				$this->Session->setFlash(__('The dependiente has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dependiente could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dependiente->read(null, $id);
		}
		$personas = $this->Dependiente->Persona->find('list');
		$albergados = $this->Dependiente->Albergado->find('list');
		$this->set(compact('personas', 'albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dependiente', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dependiente->delete($id)) {
			$this->Session->setFlash(__('Dependiente deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dependiente was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
