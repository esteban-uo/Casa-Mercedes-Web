<?php
class EstadosSaludsController extends AppController {

	var $name = 'EstadosSaluds';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->EstadosSalud->recursive = 0;
		$this->set('estadosSaluds', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El estado de salud no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('estadosSalud', $this->EstadosSalud->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->EstadosSalud->create();
			if ($this->EstadosSalud->save($this->data)) {
				$this->Session->setFlash(__('El estado de salud se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estado de salud no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$personas = $this->EstadosSalud->Persona->find('list');
		$this->set(compact('personas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('El estado de salud no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->EstadosSalud->save($this->data)) {
				$this->Session->setFlash(__('El estado de salud se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El estado de salud no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->EstadosSalud->read(null, $id);
		}
		$personas = $this->EstadosSalud->Persona->find('list');
		$this->set(compact('personas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número del estado de salud es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->EstadosSalud->delete($id)) {
			$this->Session->setFlash(__('Los datos del estado de salud se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos del estado de salud no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
