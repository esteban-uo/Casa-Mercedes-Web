<?php
class TenenciasController extends AppController {

	var $name = 'Tenencias';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Tenencia->recursive = 0;
		$this->set('tenencias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la tenencia no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tenencia', $this->Tenencia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tenencia->create();
			if ($this->Tenencia->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la tenencia se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la tenencia no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la tenencia no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tenencia->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la tenencia se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la tenencia no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tenencia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la tenencia es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tenencia->delete($id)) {
			$this->Session->setFlash(__('Los datos de la tenencia se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la tenencia no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
