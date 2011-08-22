<?php
class PersonasController extends AppController {

	var $name = 'Personas';
	var $paginate = array(
		'order' => array(
			'Persona.created' => 'desc'
		)
	);
	
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
	
	function buscarPersonaPorId(){
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

		return $this->Persona->find('first', array(
												'conditions' => array("Persona.id"=>$this->params["named"]["persona_id"]),
												'contain' => $parametrosContain,
												'recursive' => 3
											)
			
									);
		
	}
	
	function fichaIdentificacionPorId(){
		$parametrosContain = array(
							'FotoImagen' => array(
																				'Tipoimage' => array ('title'),
																				'url' => array()
																				),
																'Albergado' => array(
																				'averiguacion_previa' => array(),
																				'expediente' => array(),
																				'fecha_ingreso' => array(),
																				'remitida_por' => array(),
																				'embarazo_actual' => array(),
																				'numero_embarazos' => array(),
																				'cant_hijos' => array(),
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

	function estudioSocialPorId(){
		$parametrosContain = array(
																'Albergado' => array(
																				'expediente' => array(),
																				'averiguacion_previa' => array(),
																				'cant_hijos' => array(),
																				'SocioEconomico' => array (
																						'ha_trabajado' => array(),
																						'tiempo_de_trabajo' => array(),
																						'ultimo_trabajo' => array(),
																						'tiempo' => array(),
																						'nivel_economico' => array(),
																						'sueldo' => array(),
																						'ultimo_trabajo' => array(),
																						'Zona' => array('title'),
																						'Vivienda' => array('title'),
																						'Construccion' => array('title'),
																						'Tenencia' => array('title'),
																						'Distribucion' => array ('title')
																					),
																				'Familia' => array (),
																				'Social' => array(
																						'comunicacion' => array(),
																						'normas_y_valores' => array(),
																						'roles' => array(),
																						'manejo_autoridad' => array()
																						
																					),
																				'Dato' => array(),
																				)
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
		$arregloComparacion =  array(
								"<" => "Mayor a",
								">" => "Menor a",
								"=" => "Igual a"
								);
		
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
		$busqueda = "";
		if($this->params["named"]["edad"]["anos"] != null){
			$tiempo = "-".($this->params["named"]["edad"]["anos"])." year";
			$busqueda .= "Años: ".$this->params["named"]["edad"]["anos"].", ";
		}if($this->params["named"]["edad"]["meses"] != null){
			$tiempo .= " -".( ($this->params["named"]["edad"]["meses"]))." month";
			$busqueda .= "Meses: ".($this->params["named"]["edad"]["meses"]).", ";
		}if($tiempo != ""){
			$operadorFecha = ($this->params["named"]["edad"]["condicion"] == null)? "=" : $this->params["named"]["edad"]["condicion"];
			$fecha_condicion = date('Y-m-d', strtotime($tiempo));
			$condiciones += array("Nacimiento.fecha_nacimiento ".$operadorFecha => $fecha_condicion);
		}if($this->params["named"]["casa"] != null){
			$this->Persona->Albergado->Casa->recursive = -1;
			$resultadoCasa = $this->Persona->Albergado->Casa->find("first", array('conditions' => array("Casa.direccion"=>$this->params["named"]["casa"]), "fields" => array("Casa.id")));
			$busqueda .= "Casa: ".($this->params["named"]["casa"]).".";
			
			if($resultadoCasa != null){
				$condiciones += array("Albergado.casa_id"=>$resultadoCasa["Casa"]["id"]);
			}
		}
		if(count($condiciones) > 0){
			$personas = $this->Persona->find('all', array(
														'conditions' => $condiciones,
														'contain' => $parametrosContain,
													)
											);
			return array("Mensaje"=>"Busqueda: ".$arregloComparacion[$operadorFecha].": ".$busqueda,"Personas"=>$personas);
		}else{
			return null;
		}
	}
}
