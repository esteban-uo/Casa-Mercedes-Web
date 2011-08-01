<?php
class CasasController extends AppController {

	var $name = 'Casas';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Casa->recursive = 0;
		$this->set('casas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos de la casa son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('casa', $this->Casa->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Casa->create();
			if ($this->Casa->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la casa son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la casa son incorrectos. Intenta nuevamente.', true));
			}
		}
		$paises = $this->Casa->Paises->find('list');
		$estados = $this->Casa->Estado->find('list');
		$municipios = $this->Casa->Municipio->find('list');
		$this->set(compact('paises', 'estados', 'municipios'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la casa son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Casa->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la casa son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la casa son incorrectos y no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Casa->read(null, $id);
		}
		$paises = $this->Casa->Paises->find('list');
		$estados = $this->Casa->Estado->find('list');
		$municipios = $this->Casa->Municipio->find('list');
		$this->set(compact('paises', 'estados', 'municipios'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número de la casa es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Casa->delete($id)) {
			$this->Session->setFlash(__('Los datos de la casa han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('La casa no se pudo dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
