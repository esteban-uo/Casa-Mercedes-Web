<?php
class DocumentosController extends AppController {

	var $name = 'Documentos';

	function index() {
		$this->Documento->recursive = 0;
		$this->set('documentos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Documento invalido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('documento', $this->Documento->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Documento->create();
			if ($this->Documento->save($this->data)) {
				$this->Session->setFlash(__('El documento se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El documento no se ha podido guardado. Por favor, intenta nuevamente.', true));
			}
		}
		$personas = $this->Documento->Persona->find('list');
		$documentaciones = $this->Documento->Documentacion->find('list');
		$this->set(compact('personas', 'documentaciones'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Documento invalido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Documento->save($this->data)) {
				$this->Session->setFlash(__('El documento se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('El documento no se ha podido guardado. Por favor, intenta nuevamente.', true));
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
			$this->Session->setFlash(__('El número del documento es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Documento->delete($id)) {
			$this->Session->setFlash(__('El docuemnto se elimino satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El documento no se pudo eliminar. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
