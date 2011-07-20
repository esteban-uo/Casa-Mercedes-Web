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
}
