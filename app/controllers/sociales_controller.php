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
			$this->Session->setFlash(__('Invalid social', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('social', $this->Social->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Social->create();
			if ($this->Social->save($this->data)) {
				$this->Session->setFlash(__('The social has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The social could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->Social->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid social', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Social->save($this->data)) {
				$this->Session->setFlash(__('The social has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The social could not be saved. Please, try again.', true));
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
			$this->Session->setFlash(__('Invalid id for social', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Social->delete($id)) {
			$this->Session->setFlash(__('Social deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Social was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
