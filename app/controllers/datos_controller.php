<?php
class DatosController extends AppController {

	var $name = 'Datos';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Dato->recursive = 0;
		$this->set('datos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid dato', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dato', $this->Dato->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dato->create();
			if ($this->Dato->save($this->data)) {
				$this->Session->setFlash(__('The dato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->Dato->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid dato', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dato->save($this->data)) {
				$this->Session->setFlash(__('The dato has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dato could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dato->read(null, $id);
		}
		$albergados = $this->Dato->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for dato', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dato->delete($id)) {
			$this->Session->setFlash(__('Dato deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Dato was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
