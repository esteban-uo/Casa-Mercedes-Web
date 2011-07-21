<?php
class DocumentacionesController extends AppController {

	var $name = 'Documentaciones';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Documentacion->recursive = 0;
		$this->set('documentaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la documentación son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documentacion', $this->Documentacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Documentacion->create();
			if ($this->Documentacion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la documentación son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la documentación son incorrectos y no se pudo guardar. Por favor intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la documentación son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documentacion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la documentación son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la documentación son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Documentacion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número de la documentación es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Documentacion->delete($id)) {
			$this->Session->setFlash(__('Los datos de la documentación han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la documentación no se pudieron dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
