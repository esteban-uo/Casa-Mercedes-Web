<?php
class DatosAlbergadosController extends AppController {

	var $name = 'DatosAlbergados';

	function index() {
		$this->DatosAlbergado->recursive = 0;
		$this->set('datosAlbergados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid datos albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('datosAlbergado', $this->DatosAlbergado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->DatosAlbergado->create();
			if ($this->DatosAlbergado->save($this->data)) {
				$this->Session->setFlash(__('The datos albergado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datos albergado could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->DatosAlbergado->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid datos albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->DatosAlbergado->save($this->data)) {
				$this->Session->setFlash(__('The datos albergado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The datos albergado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->DatosAlbergado->read(null, $id);
		}
		$albergados = $this->DatosAlbergado->Albergado->find('list');
		$this->set(compact('albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for datos albergado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->DatosAlbergado->delete($id)) {
			$this->Session->setFlash(__('Datos albergado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Datos albergado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
