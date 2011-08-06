<?php
class EscolaridadesController extends AppController {

	var $name = 'Escolaridades';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function index() {
		$this->Escolaridad->recursive = 0;
		$this->set('escolaridades', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('La escolaridad es inválida', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('escolaridad', $this->Escolaridad->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Escolaridad->create();
			if ($this->Escolaridad->save($this->data)) {
				$this->Session->setFlash(__('La escolaridad se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La escolaridad no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		$albergados = $this->Escolaridad->Albergado->find('list');
		$ciclosEscolares = $this->Escolaridad->CicloEscolar->find('list');
		$this->set(compact('albergados', 'ciclosEscolares'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('La escolaridad es inválida', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Escolaridad->save($this->data)) {
				$this->Session->setFlash(__('La escolaridad se ha guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('La escolaridad no se pudo guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Escolaridad->read(null, $id);
		}
		$albergados = $this->Escolaridad->Albergado->find('list');
		$cicloEscolars = $this->Escolaridad->CicloEscolar->find('list');
		$this->set(compact('albergados', 'cicloEscolars'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número de la escolaridad es inválida.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Escolaridad->delete($id)) {
			$this->Session->setFlash(__('Los datos de la escolaridad se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la escolaridad no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
}
