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
			$this->Session->setFlash(__('Los datos de la vestimenta no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('vestimenta', $this->Vestimenta->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Vestimenta->create();
			if ($this->Vestimenta->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la vestimenta no existen o es inválido.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la vestimenta no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$personas = $this->Vestimenta->Persona->find('list');
		$this->set(compact('personas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos de la vestimenta no existen o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Vestimenta->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la vestimenta se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la vestimenta no se pudieron guardar. Por favor, intenta nuevamente.', true));
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
			$this->Session->setFlash(__('El número (clave) de la vestimenta es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Vestimenta->delete($id)) {
			$this->Session->setFlash(__('Los datos de la vestimenta se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la vestimenta no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
