<?php
class DocumentosController extends AppController {

	var $name = 'Documentos';

	function index() {
		$this->Documento->recursive = 0;
		$this->set('documentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid documento', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documento', $this->Documento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Documento->create();
			if ($this->Documento->save($this->data)) {
				$this->Session->setFlash(__('The documento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documento could not be saved. Please, try again.', true));
			}
		}
		$personas = $this->Documento->Persona->find('list');
		$documentaciones = $this->Documento->Documentacion->find('list');
		$this->set(compact('personas', 'documentaciones'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid documento', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documento->save($this->data)) {
				$this->Session->setFlash(__('The documento has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documento could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Documento->read(null, $id);
		}
		$personas = $this->Documento->Persona->find('list');
		$documentaciones = $this->Documento->Documentacion->find('list');
		$this->set(compact('personas', 'documentaciones'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for documento', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Documento->delete($id)) {
			$this->Session->setFlash(__('Documento deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Documento was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
