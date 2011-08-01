<?php
class AlbergadosController extends AppController {

	var $name = 'Albergados';

	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->Albergado->recursive = 0;
		$this->set('albergados', $this->paginate());
	}
        
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Los datos del albergado son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('albergado', $this->Albergado->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Albergado->create();
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('Los datos del albergado son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del albergado son incorrectos. Intenta nuevamente.', true));
			}
		}
		
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$fotoImagens = $this->Albergado->FotoImagen->find('list');
		$ingresos = $this->Albergado->Ingreso->find('list');
		$this->set(compact('personas', 'casas', 'fotoImagens', 'ingresos'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Los datos del albergado son inválidos.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('Los datos del albergado son correctos y se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos del albergado son incorrectos. Intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Albergado->read(null, $id);
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$fotoImagens = $this->Albergado->FotoImagen->find('list');
		$ingresos = $this->Albergado->Ingreso->find('list');
		$this->set(compact('personas', 'casas', 'fotoImagens', 'ingresos'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for albergado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Albergado->delete($id)) {
			$this->Session->setFlash(__('Albergado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Albergado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function find(){
		$this->loadModel('Persona');
		 $parametrosContain = array(
									'FotoImagen' => array(
													'Tipoimage' => array ('title'),
													'url' => array()
													),
									'Albergado' => array(
													'FotoImagen' => array (
																	'Tipoimage' => array ('title'),
																	'url' => array()
																	),
													),
									'Documento' => array('id'),
									'EstadosSalud' => array('id'),
									'Nacimiento' => array('id'),
									'Vestimenta' => array('id')
								);
		 $this->Persona->Behaviors->attach('Containable', array('recursive' => true, 'notices' => true));
		 Debug($this->params);
		$edad_max = $this->params["data"]["Albergado"]["edad_maxima"];
		$edad_min = $this->params["data"]["Albergado"]["edad_minima"];
		$casa = $this->params["data"]["Albergado"]["casa_id"];
		$nombre_completo = $this->params["named"]["nombre_completo"];/*
		if($edad_max == NULL)
			$edad_max = 99;
		if($edad_min == NULL)
			$edad_min = 0;
		if($casa == NULL)
			$casa = 3;
		if($nombre_completo == NULL)
			$nombre_completo = "Lorem Ipsum Dolor Sit";*/
		 if($resultados = $this->Persona->find('all', array(
												'conditions' =>
												array(
													'Persona.edad >=' => (($edad_min == null)? $edad_min = ""),
													'Persona.edad <=' => $edad_max,
													'Persona.Casa.Id' => $casa,
													'Persona.nombre_completo' => $nombre_completo
												),
													'contain' => $parametrosContain
											)
			
									)){
				Debug($resultados);
				return $resultados;
				
		}
		return "No se encontraron resultados";
	}
}
