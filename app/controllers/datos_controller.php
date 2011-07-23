<?php
class DatosController extends AppController {

	var $name = 'Datos';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Dato->recursive = 0;
		$this->set('datos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dato', $this->Dato->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dato->create();
			if ($this->Dato->save($this->data)) {
				$this->Session->setFlash(__('Los datos son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos son incorrectos y no se pudo guardar. Por favor intenta nuevamente.', true));
			}
		}
		$albergados = $this->Dato->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dato->save($this->data)) {
				$this->Session->setFlash(__('Los datos son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos son incorrectos y no se pudo guardar. Por favor intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dato->read(null, $id);
		}
		$albergados = $this->Dato->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número del dato es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dato->delete($id)) {
			$this->Session->setFlash(__('Los datos han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos no se pudieron dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
