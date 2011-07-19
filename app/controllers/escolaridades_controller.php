<?php
class EscolaridadesController extends AppController {

	var $name = 'Escolaridades';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Escolaridad->recursive = 0;
		$this->set('escolaridades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid escolaridad', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('escolaridad', $this->Escolaridad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Escolaridad->create();
			if ($this->Escolaridad->save($this->data)) {
				$this->Session->setFlash(__('The escolaridad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The escolaridad could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->Escolaridad->Albergado->find('list');
		$cicloEscolars = $this->Escolaridad->CicloEscolar->find('list');
		$this->set(compact('albergados', 'cicloEscolars'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid escolaridad', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Escolaridad->save($this->data)) {
				$this->Session->setFlash(__('The escolaridad has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The escolaridad could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Escolaridad->read(null, $id);
		}
		$albergados = $this->Escolaridad->Albergado->find('list');
		$cicloEscolars = $this->Escolaridad->CicloEscolar->find('list');
		$this->set(compact('albergados', 'cicloEscolars'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for escolaridad', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Escolaridad->delete($id)) {
			$this->Session->setFlash(__('Escolaridad deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Escolaridad was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
