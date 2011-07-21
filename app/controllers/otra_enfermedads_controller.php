<?php
class OtraEnfermedadsController extends AppController {

	var $name = 'OtraEnfermedads';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->OtraEnfermedad->recursive = 0;
		$this->set('otraEnfermedads', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('La enfermedad no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('otraEnfermedad', $this->OtraEnfermedad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->OtraEnfermedad->create();
			if ($this->OtraEnfermedad->save($this->data)) {
				$this->Session->setFlash(__('La enfermedad no existe o es inválido.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la enfermedad no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('La enfermedad no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->OtraEnfermedad->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la enfermedad se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la enfermedad se han guardado satisfactoriamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->OtraEnfermedad->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la enfermedad es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->OtraEnfermedad->delete($id)) {
			$this->Session->setFlash(__('Los datos de la enfermedad se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la enfermedad no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
