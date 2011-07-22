<?php
class FamiliasController extends AppController {

	var $name = 'Familias';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Familia->recursive = 0;
		$this->set('familias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la familia no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('familia', $this->Familia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Familia->create();
			if ($this->Familia->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la familia se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la familia no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$albergados = $this->Familia->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la familia no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Familia->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la familia se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la familia no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Familia->read(null, $id);
		}
		$albergados = $this->Familia->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la familia es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Familia->delete($id)) {
			$this->Session->setFlash(__('Los datos de la familia se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la familia no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
