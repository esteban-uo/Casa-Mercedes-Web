<?php
class MunicipiosController extends AppController {

	var $name = 'Municipios';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Municipio->recursive = 0;
		$this->set('municipios', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El municipio no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('municipio', $this->Municipio->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Municipio->create();
			if ($this->Municipio->save($this->data)) {
				$this->Session->setFlash(__('Los datos del municipio se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del municipio no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$estados = $this->Municipio->Estado->find('list');
		$this->set(compact('estados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('El municipio no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Municipio->save($this->data)) {
				$this->Session->setFlash(__('Los datos del municipio se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del municipio no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Municipio->read(null, $id);
		}
		$estados = $this->Municipio->Estado->find('list');
		$this->set(compact('estados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) del municipio es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Municipio->delete($id)) {
			$this->Session->setFlash(__('Los datos del municipio se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos del municipio no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
