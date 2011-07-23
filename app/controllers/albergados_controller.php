<?php
class AlbergadosController extends AppController {

	var $name = 'Albergados';
    var $helpers = array('Html','Javascript', 'Ajax');
	

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
		$this->set(compact('personas', 'casas', 'fotoImagens'));
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
		$this->set(compact('personas', 'casas', 'fotoImagens'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número del albergado es incorrecto.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Albergado->delete($id)) {
			$this->Session->setFlash(__('El albergado ha sido eliminado satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('El albergado no se pudo dar de baja. Intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function buscarAlbergadosPorFiltros(){
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
		 if($resultado_minima_edad = $this->Persona->find('all', array(
												'conditions' =>
												array(
													'Persona.edad >=' => $this->params["named"]["edad_minima"],
													'Persona.edad <=' => $this->params["named"]["edad_maxima"],
													'Persona.Casa.Id' => $this->params["named"]["casa"],
													'CONCAT(Persona.primer_nombre," ",Persona.primer_apellido," ",Persona.segundo_apellido)' => $this->params["named"]["nombre_completo"]
												),
													'contain' => $parametrosContain
											)
			
									)){
				Debug($resultado_minima_edad);
				return $resultado_minima_edad;
				
		}else{
			return $this->Persona->find('first', array(
												'conditions' => 
												array(
													'CONCAT(Persona.primer_nombre," ",Persona.primer_apellido," ",Persona.segundo_apellido)' => $this->params["named"]["nombre_completo"]
												),
													'contain' => $parametrosContain
											)
			
									);
		}
	}
}
