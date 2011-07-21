<?php
class DatosAlbergadosController extends AppController {

	var $name = 'DatosAlbergados';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->DatosAlbergado->recursive = 0;
		$this->set('datosAlbergados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos del albergado son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('datosAlbergado', $this->DatosAlbergado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DatosAlbergado->create();
			if ($this->DatosAlbergado->save($this->data)) {
				$this->Session->setFlash(__('Los datos del albergado son correctos y se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del albergado son incorrectos. Por favor, intenta nuevamente.', true));
			}
		}
		$albergados = $this->DatosAlbergado->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos del albergado son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DatosAlbergado->save($this->data)) {
				$this->Session->setFlash(__('Los datos del albergado son correctos y se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del albergado son incorrectos. Intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DatosAlbergado->read(null, $id);
		}
		$albergados = $this->DatosAlbergado->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número del albergado es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DatosAlbergado->delete($id)) {
			$this->Session->setFlash(__('El albergado ha sido eliminado satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El albergado no se pudo dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
