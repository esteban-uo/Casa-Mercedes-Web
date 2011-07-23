<?php
class CicloEscolarsController extends AppController {

	var $name = 'CicloEscolars';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->CicloEscolar->recursive = 0;
		$this->set('cicloEscolars', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos del ciclo escolar son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cicloEscolar', $this->CicloEscolar->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			debug($this->data);
			$this->CicloEscolar->create();
			if ($this->CicloEscolar->save($this->data)) {
				$this->Session->setFlash(__('Los datos del ciclo escolar son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del ciclo escolar son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos del ciclo escolar son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CicloEscolar->save($this->data)) {
				$this->Session->setFlash(__('Los datos del ciclo escolar son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del ciclo escolar son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CicloEscolar->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número del ciclo escolar es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CicloEscolar->delete($id)) {
			$this->Session->setFlash(__('Los datos del ciclo escolar han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El ciclo escolar no se pudo dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
