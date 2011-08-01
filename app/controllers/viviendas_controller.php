<?php
class ViviendasController extends AppController {

	var $name = 'Viviendas';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Vivienda->recursive = 0;
		$this->set('viviendas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la vivienda no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vivienda', $this->Vivienda->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vivienda->create();
			if ($this->Vivienda->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la vivienda se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la vivienda no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la vivienda no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vivienda->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la vivienda se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la vivienda no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vivienda->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la vivienda es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vivienda->delete($id)) {
			$this->Session->setFlash(__('Los datos de la vivienda se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la vivienda no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
