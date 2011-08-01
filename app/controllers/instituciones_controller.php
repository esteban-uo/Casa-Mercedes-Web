<?php
class InstitucionesController extends AppController {

	var $name = 'Instituciones';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Institucion->recursive = 0;
		$this->set('instituciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('La institución no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('institucion', $this->Institucion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Institucion->create();
			if ($this->Institucion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la institución se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la institución no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$albergados = $this->Institucion->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('La institución no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Institucion->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la institución se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la institución no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Institucion->read(null, $id);
		}
		$albergados = $this->Institucion->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la institución es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Institucion->delete($id)) {
			$this->Session->setFlash(__('Los datos de la institución se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la institución no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
