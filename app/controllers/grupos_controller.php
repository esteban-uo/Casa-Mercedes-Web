<?php
class GruposController extends AppController {

	var $name = 'Grupos';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Grupo->recursive = 0;
		$this->set('grupos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos del grupo no existen o es inválilido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('grupo', $this->Grupo->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Grupo->create();
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('Los datos del grupo se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del grupo no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos del grupo no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Grupo->save($this->data)) {
				$this->Session->setFlash(__('Los datos del grupo se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del grupo no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Grupo->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) del grupo es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Grupo->delete($id)) {
			$this->Session->setFlash(__('Los datos del grupo se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos del grupo no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
