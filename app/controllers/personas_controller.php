<?php
class PersonasController extends AppController {

	var $name = 'Personas';
		
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	function find(){
		if(!empty($data)){
		}
	}
	
	function index() {
		$this->Persona->recursive = 0;
		$this->set('personas', $this->paginate());
	}

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('La persona no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('persona', $this->Persona->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->Persona->create();
			if ($this->Persona->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la persona se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la persona no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('La persona no existe o es inválido.', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Persona->save($this->data)) {
				$this->Session->setFlash(__('Los datos de la persona se han guardado satisfactoriamente.', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('Los datos de la persona no se pudieron guardar. Por favor, intenta nuevamente.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Persona->read(null, $id);
		}
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('El número (clave) de la persona es inválido.', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Persona->delete($id)) {
			$this->Session->setFlash(__('Los datos de la persona se eliminaron satisfactoriamente.', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Los datos de la persona no se pudieron eliminar. Por favor, intenta nuevamente.', true));
		$this->redirect(array('action' => 'index'));
	}
	
	function buscarNombreCompletoPersonaPorid(){
		$this->Persona->recursive = -1;
		$persona = $this->Persona->findById($this->params["named"]["persona_id"]);
		return $persona["Persona"]["nombre_completo"];
	}
	
	function buscarPersonaPorNombreCompleto(){
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
													'Institucion' => array ('id'),
													'Familia' => array ('id'),
													'Social' => array ('id'),
													'SocioEconomico' => array ('id'),
													'Problematica' => array ('id'),
													),
									'Documento' => array('id'),
									'EstadosSalud' => array('id'),
									'Nacimiento' => array('id'),
									'Vestimenta' => array('id')
								);
								
		 $this->Persona->Behaviors->attach('Containable', array('recursive' => true, 'notices' => true));
		 if($resultado_nombre_completo = $this->Persona->find('first', array(
												'conditions' => 
												array(
													'CONCAT(Persona.primer_nombre," ",Persona.segundo_nombre," ",Persona.primer_apellido," ",Persona.segundo_apellido)' => $this->params["named"]["nombre_completo"]
												),
													'contain' => $parametrosContain
											)
			
									)){
				return $resultado_nombre_completo;
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
	
		function buscarPersonasPorFiltros(){
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
		 if($resultado_minima_edad = $this->Persona->find('all', array(
												'conditions' =>
												array(
													'Persona.edad >=' => $this->params["named"]["edad_minima"],
													'Persona.edad <=' => $this->params["named"]["edad_maxima"]
												),
													'contain' => $parametrosContain
											)
			
									)){
				return $resultado_nombre_completo;
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
