<?php
class EstadosController extends AppController {

	var $name = 'Estados';

	function index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('Invalid estado', true), array('action' => 'index'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estado->create();
			if ($this->Estado->save($this->data)) {
				$this->flash(__('Estado saved.', true), array('action' => 'index'));
			} else {
			}
		}
		$paises = $this->Estado->Pais->find('list');
		$this->set(compact('paises'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('Invalid estado', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estado->save($this->data)) {
				$this->flash(__('The estado has been saved.', true), array('action' => 'index'));
			} else {
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Estado->read(null, $id);
		}
		$paises = $this->Estado->Pais->find('list');
		$this->set(compact('paises'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->flash(sprintf(__('Invalid estado', true)), array('action' => 'index'));
		}
		if ($this->Estado->delete($id)) {
			$this->flash(__('Estado deleted', true), array('action' => 'index'));
		}
		$this->flash(__('Estado was not deleted', true), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
