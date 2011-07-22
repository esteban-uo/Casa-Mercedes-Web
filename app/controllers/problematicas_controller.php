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
			$this->Session->setFlash(__('Invalid problematica', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('problematica', $this->Problematica->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Problematica->create();
			if ($this->Problematica->save($this->data)) {
				$this->Session->setFlash(__('The problematica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The problematica could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->Problematica->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid problematica', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Problematica->save($this->data)) {
				$this->Session->setFlash(__('The problematica has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The problematica could not be saved. Please, try again.', true));
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
			$this->Session->setFlash(__('Invalid id for problematica', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Problematica->delete($id)) {
			$this->Session->setFlash(__('Problematica deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Problematica was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
