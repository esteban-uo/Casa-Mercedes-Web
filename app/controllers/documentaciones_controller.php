<?php
class DocumentacionesController extends AppController {

	var $name = 'Documentaciones';

	function index() {
		$this->Documentacion->recursive = 0;
		$this->set('documentaciones', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid documentacion', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documentacion', $this->Documentacion->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Documentacion->create();
			if ($this->Documentacion->save($this->data)) {
				$this->Session->setFlash(__('The documentacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentacion could not be saved. Please, try again.', true));
			}
		}
		$documentos = $this->Documentacion->Documento->find('list');
		$this->set(compact('documentos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid documentacion', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documentacion->save($this->data)) {
				$this->Session->setFlash(__('The documentacion has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The documentacion could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Documentacion->read(null, $id);
		}
		$documentos = $this->Documentacion->Documento->find('list');
		$this->set(compact('documentos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for documentacion', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Documentacion->delete($id)) {
			$this->Session->setFlash(__('Documentacion deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Documentacion was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
