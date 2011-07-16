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
			if($persona = $this->requestAction(
							array(
								'controller' => 'personas',
								'action' => 'buscarPersonaPorNombreCompleto',
								'named' => array('nombre_completo' => $this->data["Persona"]["search"])
							)
				)){	
				//$user = $this->Personas->findById($persona["Persona"]["modified_user_id"]);
				foreach($persona["Dependiente"] as $key => $value){
					$persona["Dependiente"][$key]["nombre_completo"] = $this->requestAction(
							array(
								'controller' => 'personas',
								'action' => 'buscarNombreCompletoPersonaPorid',
								'named' => array('persona_id' => $persona["Dependiente"][$key]["persona_id"]))
							);
				}
				//Debug($persona);
				$this->set($persona);
				$this->set('busqueda', true);
				
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
	
	function login() {
		$title_for_layout = "Login";
		$this->set(compact('title_for_layout'));
	}
	
}
