<?php
class VestimentasController extends AppController {

	var $name = 'Vestimentas';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Vestimenta->recursive = 0;
		$this->set('vestimentas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid vestimenta', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vestimenta', $this->Vestimenta->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vestimenta->create();
			if ($this->Vestimenta->save($this->data)) {
				$this->Session->setFlash(__('The vestimenta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vestimenta could not be saved. Please, try again.', true));
			}
		}
		$personas = $this->Vestimenta->Persona->find('list');
		$this->set(compact('personas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid vestimenta', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vestimenta->save($this->data)) {
				$this->Session->setFlash(__('The vestimenta has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The vestimenta could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Vestimenta->read(null, $id);
		}
		$personas = $this->Vestimenta->Persona->find('list');
		$this->set(compact('personas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for vestimenta', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vestimenta->delete($id)) {
			$this->Session->setFlash(__('Vestimenta deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Vestimenta was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
