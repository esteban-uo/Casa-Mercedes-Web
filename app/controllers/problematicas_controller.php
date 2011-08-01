<?php
class ProblematicasController extends AppController {

	var $name = 'Problematicas';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Problematica->recursive = 0;
		$this->set('problematicas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('La problemática no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('problematica', $this->Problematica->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Problematica->create();
			if ($this->Problematica->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la problemática se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la problemática no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$albergados = $this->Problematica->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('La problemática no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Problematica->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la problemática se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la problemática no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Problematica->read(null, $id);
		}
		$albergados = $this->Problematica->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la problemática es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Problematica->delete($id)) {
			$this->Session->setFlash(__('Los datos de la problemática se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la problemática no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
