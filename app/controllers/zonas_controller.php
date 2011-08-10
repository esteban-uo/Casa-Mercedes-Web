<?php
class ZonasController extends AppController {

	var $name = 'Zonas';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Zona->recursive = 0;
		$this->set('zonas', $this->paginate());
	}
	

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('La zona no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('zona', $this->Zona->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Zona->create();
			if ($this->Zona->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la zona se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la zona no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('La zona no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Zona->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la zona se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la zona no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Zona->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la zona es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Zona->delete($id)) {
			$this->Session->setFlash(__('Los datos de la zona se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la zona no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
	
	
}
