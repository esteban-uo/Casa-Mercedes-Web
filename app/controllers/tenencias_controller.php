<?php
class TenenciasController extends AppController {

	var $name = 'Tenencias';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Tenencia->recursive = 0;
		$this->set('tenencias', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid tenencia', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('tenencia', $this->Tenencia->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Tenencia->create();
			if ($this->Tenencia->save($this->data)) {
				$this->Session->setFlash(__('The tenencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tenencia could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid tenencia', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Tenencia->save($this->data)) {
				$this->Session->setFlash(__('The tenencia has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The tenencia could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Tenencia->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for tenencia', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Tenencia->delete($id)) {
			$this->Session->setFlash(__('Tenencia deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Tenencia was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
