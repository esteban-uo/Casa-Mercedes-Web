<?php
class CicloEscolarsController extends AppController {

	var $name = 'CicloEscolars';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->CicloEscolar->recursive = 0;
		$this->set('cicloEscolars', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid ciclo escolar', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('cicloEscolar', $this->CicloEscolar->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			debug($this->data);
			$this->CicloEscolar->create();
			if ($this->CicloEscolar->save($this->data)) {
				$this->Session->setFlash(__('The ciclo escolar has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciclo escolar could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid ciclo escolar', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->CicloEscolar->save($this->data)) {
				$this->Session->setFlash(__('The ciclo escolar has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The ciclo escolar could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->CicloEscolar->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for ciclo escolar', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->CicloEscolar->delete($id)) {
			$this->Session->setFlash(__('Ciclo escolar deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Ciclo escolar was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
