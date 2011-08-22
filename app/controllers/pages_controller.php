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
		if (!empty($this->data) || !empty($this->params["named"])) {
			if(isset($this->params["named"]["persona_id"])){
				$persona = $this->requestAction(
					array(
										'controller' => 'personas',
										'action' => 'buscarPersonaPorId',
										'named' => array('persona_id' => $this->params["named"]["persona_id"])
					));
			}else{
			if($persona = $this->requestAction(
			array(
								'controller' => 'personas',
								'action' => 'buscarPersonaPorNombreCompleto',
								'named' => array('nombre_completo' => (!empty($this->data))? $this->data["Persona"]["search"] : $this->params["named"]["nombre_completo"])
			)
			)){
			}
			}
			if($persona['Albergado']['id']){
					$Dependiente = $this->requestAction(
					array(
									'controller' => 'dependientes',
									'action' => 'obtenerDependientesPorAlbergadoId',
									'named' => array('albergado_id' => $persona['Albergado']['id']))
					);
			}
			$this->set($persona);
			$this->set('busqueda', true);
			$this->set(compact('Dependiente'));
		}else{
			$this->set('busqueda', false);
		}
		$title_for_layout = "Panel de control del Administrador";
		$this->layout = 'panel_control';
		$this->set(compact('title_for_layout'));
	}

	function filtros(){
		if (!empty($this->data)) {
			$resultado = $this->requestAction(
							array(
								'controller' => 'personas',
								'action' => 'buscarPersonasPorFiltros',
								'named' => $this->data["Persona"]
							));
			$this->Session->write("tmpBusquedaFiltros", $this->data["Persona"]);
			$Personas = $resultado["Personas"];
			$this->set(compact('Personas'));
			$this->set("Mensaje", $resultado["Mensaje"]);
		}

		$title_for_layout = "Panel de control del Administrador - Filtros";
		$this->layout = 'panel_control';
		$this->set(compact('title_for_layout'));
	}
	
	function generarExcelFiltro(){
		$resultado = $this->requestAction(
							array(
								'controller' => 'personas',
								'action' => 'buscarPersonasPorFiltros',
								'named' => $this->Session->read("tmpBusquedaFiltros")
							));
		$Personas = $resultado["Personas"];
		$this->set(compact('Personas'));
		$this->render('export_xls','export_xls');
	}
	
	function obtenerEstadisticasPrincipales(){
		$this->loadModel('Albergados');
		$this->loadModel('Dependientes');
		$albergados = $this->Albergados->find('all', array(
																			'fields' => array('id', 'persona_id'),
																			'limit' => '5',
																			'order' => array('Albergados.created' => 'desc')
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
