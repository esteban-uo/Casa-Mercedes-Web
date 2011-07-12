<?php 
class ConstruccionesController extends AppController {

	var $name = 'Construcciones';

	function index() {
		$this->Construccion->recursive = 0;
		$this->set('construcciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid construccion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('construccion', $this->Construccion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Construccion->create();
			if ($this->Construccion->save($this->data)) {
				$this->Session->setFlash(__('The construccion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The construccion could not be saved. Please, try again.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid construccion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Construccion->save($this->data)) {
				$this->Session->setFlash(__('The construccion has been saved', true));
				//$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The construccion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Construccion->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for construccion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Construccion->delete($id)) {
			$this->Session->setFlash(__('Construccion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Construccion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
?>