<?php
class PersonasController extends AppController {

	var $name = 'Personas';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
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
			$this->set("imagen_id", $this->data["FotoImagen"]["id"]);
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
													'Ingreso' => array ('id'),
													'Dato' => array ('id'),
													'DatosAlbergado' => array ('id'),
													'Escolaridad' => array ('id')
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
	
	function fichaIdentificacionPorId(){
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
																				'Institucion' => array ('fecha_egreso'),
																				'Familia' => array ('id'),
																				'Social' => array ('id'),
																				'SocioEconomico' => array (
																								'id' => array(),
																								'Vivienda' => array('title'),
																				),
																				'Problematica' => array (
																									'calle',
																									'abandono', 'omision_de_cuidados', 'violencia',
																									'abuso_sexual'
																								)
																				),
																'Documento' => array(
							'tramitada_por_cm' => array()
							),
																'EstadosSalud' => array(
							'peso' => array(),
							'altura' => array(),
							'tipo_sangre' => array()
							),
																'Nacimiento' => array(
																					'fecha_nacimiento' => array(),
																					'Estado' => array ('title'),
																					'Municipio' => array ('title'),
																					 ),
																'Vestimenta' => array('id')
							);
					$this->Persona->Behaviors->attach('Containable', array('recursive' => true, 'notices' => true));
					
					$persona = $this->Persona->find('first', array(
											'conditions' => array('Persona.id' => $this->params["named"]["id"]),
											'contain' => $parametrosContain
											));
					return $persona;
													
	}
	
	function buscarPersonasPorFiltros(){
		$condiciones = array();
		$parametrosContain = array(
																'Albergado' => array(
																				'Casa'=> array ('id','direccion'),
																				'expediente' => array(),
																				'fecha_ingreso' => array(),
																				'averiguacion_previa' => array()
																				),
																'Nacimiento' => array(
																					'fecha_nacimiento' => array(),
																					'Estado' => array ('title'),
																					'Municipio' => array ('title'),
																					 )
							);
		$this->Persona->Behaviors->attach('Containable', array('recursive' => true, 'notices' => true));
		
		$tiempo = "";
		if($this->params["named"]["edad"]["anos"] != null){
			$tiempo = "-".($this->params["named"]["edad"]["anos"])." year";
		}if($this->params["named"]["edad"]["meses"] != null){
			$tiempo .= " ".( ($this->params["named"]["edad"]["meses"]) - date('m') )." month";
		}if($tiempo != ""){
			$operadorFecha = ($this->params["named"]["edad"]["condicion"] == null)? "=" : $this->params["named"]["edad"]["condicion"];
			$tiempo .= " -".(date('d')-1)." day";
			$fecha_condicion = date('Y-m-d', strtotime($tiempo));
			Debug($fecha_condicion);
			$condiciones += array("Nacimiento.fecha_nacimiento ".$operadorFecha => $fecha_condicion);
		}if($this->params["named"]["casa"] != null){
			$condiciones += array("Albergado.casa_id"=>$this->params["named"]["casa"]);
		}
		if(count($condiciones) > 0){
			return $this->Persona->find('all', array(
														'conditions' => $condiciones,
														'contain' => $parametrosContain
													)
											);
		}else{
			return null;
		}
	}
}
