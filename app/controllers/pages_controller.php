<?php
class PagesController extends AppController {
	var $name = 'Pages';
	var $helpers = array('Html', 'Session', 'ImagenesGaleria');
	var $uses = array();
	
	function index() {
		$title_for_layout = "Página principal";
		$this->set(compact('title_for_layout'));
	}
	
	function acp() {
		if (!empty($this->data)) {
			Debug($this->data);
			if($persona = $this->requestAction(
							array(
								'controller' => 'personas',
								'action' => 'buscarPersonaPorNombreCompleto',
								'named' => array('nombre_completo' => $this->data["Persona"]["search"])
							)
				)){
				if($persona['Albergado']['id']){
					$Dependiente = $this->requestAction(
								array(
									'controller' => 'dependientes',
									'action' => 'obtenerDependientesPorAlbergadoId',
									'named' => array('albergado_id' => $persona['Albergado']['id']))
								);
				}
				Debug($persona);
				
				$this->set($persona);
				$this->set('busqueda', true);
				$this->set(compact('Dependiente'));
				
			}else{
				$this->set('busqueda', false);
			}
		}else{
				$this->set('busqueda', false);
		}
		$title_for_layout = "Panel de control del Administrador";
		$this->layout = 'panel_control';
		$this->set(compact('title_for_layout'));
	}

	function obtenerEstadisticasPrincipales(){
		$this->loadModel('Albergados');
		$this->loadModel('Dependientes');
		$albergados = $this->Albergados->find('all', array(
																			'fields' => array('id', 'persona_id'),
																			'limit' => '5',
																			'order' => array('Albergados.created')
																			)
															);
		foreach($albergados as $key => $value){
			$albergados[$key]['Albergados']['nombre_completo'] = $this->requestAction(array(
																	'controller' => 'personas',
																	'action' => 'buscarNombreCompletoPersonaPorid',
																	'named' => array(
																		'persona_id' => $albergados[$key]['Albergados']['persona_id']
																		)
																	)
																);
		}
		
		$parametros = array (
						"totalAlbergados" => $this->Albergados->find('count'),
						"listaAlbergados" => $albergados,
						"totalDependientes" => $this->Dependientes->find('count'),
						
					);
					
		return $parametros;
	}
	
	function crearReporteGeneral($id){
	
		//Carga de modelos
		$this->loadModel('Albergado');
		$this->loadModel('Persona');
		//$this->loadModel('Estados_salud');
		$this->loadModel('Documentos');
		$this->loadModel('SocioEconomico');
		$this->loadModel('Institucion');
		
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
                                                    'Problematica' => array ()
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
                                                        'Pais' => array ('title'),
                                                        'Municipio' => array ('title'),
                                                        'id' => array(),
                                                         ),
                                    'Vestimenta' => array('id')
								);
		
         $this->Persona->Behaviors->attach('Containable', array('recursive' => true, 'notices' => true));
		//if(!empty($this->data)){
			//$id = $this->data['id'];
			$persona  = $this->Persona->find('first', array(
				'conditions' =>  array('Persona.id' => $id),
				'contain' => $parametrosContain
			));
			
			if(!$socioEconomico = $this->SocioEconomico->find('first', array(
				'conditions' => array('SocioEconomico.albergado_id' => $persona['Albergado']['id'])
			))){
				$socioEconomico = "No hay datos encontrados";
			}
			
			$institucion = $this->Institucion->find('first', array(
				'conditions' => array('Institucion.albergado_id' => $persona['Albergado']['id'])
			));
			
			//Debug($socioEconomico);
			//Debug($persona);
			$this->set('persona', $persona);
			$this->set('institucion', $institucion);
			$this->set('socioEconomico', $socioEconomico);
		//}
	}
}
