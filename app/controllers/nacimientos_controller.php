<?php
class NacimientosController extends AppController {

	var $name = 'Nacimientos';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Nacimiento->recursive = 0;
		$this->set('nacimientos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid nacimiento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('nacimiento', $this->Nacimiento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Nacimiento->create();
			if ($this->Nacimiento->save($this->data)) {
				$this->Session->setFlash(__('The nacimiento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nacimiento could not be saved. Please, try again.', true));
			}
		}
		$personas = $this->Nacimiento->Persona->find('list');
		$paises = $this->Nacimiento->Pais->find('list');
		$estados = $this->Nacimiento->Estado->find('list');
		$municipios = $this->Nacimiento->Municipio->find('list');
		$this->set(compact('personas', 'paises', 'estados', 'municipios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid nacimiento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Nacimiento->save($this->data)) {
				$this->Session->setFlash(__('The nacimiento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The nacimiento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Nacimiento->read(null, $id);
		}
		$personas = $this->Nacimiento->Persona->find('list');
		$paises = $this->Nacimiento->Pais->find('list');
		$estados = $this->Nacimiento->Estado->find('list');
		$municipios = $this->Nacimiento->Municipio->find('list');
		$this->set(compact('personas', 'paises', 'estados', 'municipios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for nacimiento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Nacimiento->delete($id)) {
			$this->Session->setFlash(__('Nacimiento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Nacimiento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
