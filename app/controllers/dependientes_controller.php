<?php
class DependientesController extends AppController {

	var $name = 'Dependientes';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Dependiente->recursive = 0;
		$this->set('dependientes', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos del dependiente son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('dependiente', $this->Dependiente->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Dependiente->create();
			if ($this->Dependiente->save($this->data)) {
				$this->Session->setFlash(__('Los datos del dependiente son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del dependiente son incorrectos. Por favor, Intenta nuevamente.', true));
			}
		}
		$personas = $this->Dependiente->Persona->find('list');
		$albergados = $this->Dependiente->Albergado->find('list');
		$this->set(compact('personas', 'albergados'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos del dependiente son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Dependiente->save($this->data)) {
				$this->Session->setFlash(__('Los datos del dependiente son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del dependiente son incorrectos y no se pudo guardar. Por favor intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Dependiente->read(null, $id);
		}
		$personas = $this->Dependiente->Persona->find('list');
		$albergados = $this->Dependiente->Albergado->find('list');
		$this->set(compact('personas', 'albergados'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número del dependiente es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Dependiente->delete($id)) {
			$this->Session->setFlash(__('Los datos del dependiente han sido eliminados satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos del dependiente no se pudieron dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function obtenerDependientesPorAlbergadoId(){
		return $this->Dependiente->find('all', 
											array('conditions' => 
												array(
													'Dependiente.albergado_id' => $this->params["named"]["albergado_id"]
												)));
	}
}
