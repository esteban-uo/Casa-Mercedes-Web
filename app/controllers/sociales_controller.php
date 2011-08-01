<?php
class SocialesController extends AppController {

	var $name = 'Sociales';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Social->recursive = 0;
		$this->set('sociales', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la social no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('social', $this->Social->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Social->create();
			if ($this->Social->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la social se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la social se han guardado satisfactoriamente.', true));
			}
		}
		$albergados = $this->Social->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la social no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Social->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la social se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la social no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Social->read(null, $id);
		}
		$albergados = $this->Social->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la social es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Social->delete($id)) {
			$this->Session->setFlash(__('Los datos de la social se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la social no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
