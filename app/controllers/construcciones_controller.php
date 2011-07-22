<?php 
class ConstruccionesController extends AppController {

	var $name = 'Construcciones';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Construccion->recursive = 0;
		$this->set('construcciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la construcción son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('construccion', $this->Construccion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Construccion->create();
			if ($this->Construccion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la construcción son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la construcción son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la construcción son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Construccion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la construcción son correctos y se han guardado satisfactoriamente.', true));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la construcción son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Construccion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número de la construcción es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Construccion->delete($id)) {
			$this->Session->setFlash(__('Los datos de la construcción han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('La construcción no se pudo dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>