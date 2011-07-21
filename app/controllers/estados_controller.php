<?php
class EstadosController extends AppController {

	var $name = 'Estados';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Estado->recursive = 0;
		$this->set('estados', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->flash(__('El estado no existe.', true), array('action' => 'index'));
		}
		$this->set('estado', $this->Estado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Estado->create();
			if ($this->Estado->save($this->data)) {
				$this->flash(__('El estado se ha guardado satisfactoriamente.', true), array('action' => 'index'));
			} else {
			}
		}
		$paises = $this->Estado->Pais->find('list');
		$this->set(compact('paises'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->flash(sprintf(__('El estado es inválido.', true)), array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Estado->save($this->data)) {
				$this->flash(__('El estado se ha guardado satisfactoriamente.', true), array('action' => 'index'));
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
			$this->flash(sprintf(__('El estado es inválido.', true)), array('action' => 'index'));
		}
		if ($this->Estado->delete($id)) {
			$this->flash(__('Los datos del estado se eliminaron satisfactoriamente.', true), array('action' => 'index'));
		}
		$this->flash(__('Los datos del estado no se pudieron eliminar. Por favor, intenta nuevamente.', true), array('action' => 'index'));
		$this->redirect(array('action' => 'index'));
	}
}
