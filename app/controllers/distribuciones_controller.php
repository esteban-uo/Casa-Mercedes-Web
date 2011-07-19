<?php
class DistribucionesController extends AppController {

	var $name = 'Distribuciones';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Distribucion->recursive = 0;
		$this->set('distribuciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid distribucion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('distribucion', $this->Distribucion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Distribucion->create();
			if ($this->Distribucion->save($this->data)) {
				$this->Session->setFlash(__('The distribucion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The distribucion could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid distribucion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Distribucion->save($this->data)) {
				$this->Session->setFlash(__('The distribucion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The distribucion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Distribucion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for distribucion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Distribucion->delete($id)) {
			$this->Session->setFlash(__('Distribucion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Distribucion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
