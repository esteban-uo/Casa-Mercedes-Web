<?php
class SocioEconomicosController extends AppController {

	var $name = 'SocioEconomicos';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->SocioEconomico->recursive = 0;
		$this->set('socioEconomicos', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid socio economico', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('socioEconomico', $this->SocioEconomico->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->SocioEconomico->create();
			if ($this->SocioEconomico->save($this->data)) {
				$this->Session->setFlash(__('The socio economico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The socio economico could not be saved. Please, try again.', true));
			}
		}
		$albergados = $this->SocioEconomico->Albergado->find('list');
		$zonas = $this->SocioEconomico->Zona->find('list');
		$viviendas = $this->SocioEconomico->Vivienda->find('list');
		$construcciones = $this->SocioEconomico->Construccion->find('list');
		$tenencias = $this->SocioEconomico->Tenencia->find('list');
		$distribuciones = $this->SocioEconomico->Distribucion->find('list');
		$this->set(compact('albergados', 'zonas', 'viviendas', 'construcciones', 'tenencias', 'distribuciones'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid socio economico', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->SocioEconomico->save($this->data)) {
				$this->Session->setFlash(__('The socio economico has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The socio economico could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->SocioEconomico->read(null, $id);
		}
		$albergados = $this->SocioEconomico->Albergado->find('list');
		$zonas = $this->SocioEconomico->Zona->find('list');
		$viviendas = $this->SocioEconomico->Vivienda->find('list');
		$construcciones = $this->SocioEconomico->Construccion->find('list');
		$tenencias = $this->SocioEconomico->Tenencia->find('list');
		$distribuciones = $this->SocioEconomico->Distribucion->find('list');
		$this->set(compact('albergados', 'zonas', 'viviendas', 'construcciones', 'tenencias', 'distribuciones'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for socio economico', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->SocioEconomico->delete($id)) {
			$this->Session->setFlash(__('Socio economico deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Socio economico was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
