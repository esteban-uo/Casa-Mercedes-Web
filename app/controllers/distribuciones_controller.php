<?php
class DistribucionesController extends AppController {

	var $name = 'Distribuciones';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Distribucion->recursive = 0;
		$this->set('distribuciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la distribución son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('distribucion', $this->Distribucion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Distribucion->create();
			if ($this->Distribucion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la distribución son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la distribución son incorrectos. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la distribución son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Distribucion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la distribución son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la distribución son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Distribucion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número de la distribución es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Distribucion->delete($id)) {
			$this->Session->setFlash(__('Los datos de la distribución han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la distribución no se pudieron dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
