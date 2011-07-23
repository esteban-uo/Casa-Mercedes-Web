<?php
class IngresosController extends AppController {

	var $name = 'Ingresos';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Ingreso->recursive = 0;
		$this->set('ingresos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El ingreso no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('ingreso', $this->Ingreso->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Ingreso->create();
			if ($this->Ingreso->save($this->data)) {
				$this->Session->setFlash(__('Los datos del ingreso se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del ingreso no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$albergados = $this->Ingreso->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('El ingreso no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Ingreso->save($this->data)) {
				$this->Session->setFlash(__('Los datos del ingreso se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del ingreso no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Ingreso->read(null, $id);
		}
		$albergados = $this->Ingreso->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) del ingreso es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Ingreso->delete($id)) {
			$this->Session->setFlash(__('Los datos del ingreso se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos del ingreso no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
