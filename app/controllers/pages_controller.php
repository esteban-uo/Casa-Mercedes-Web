<?php
class PagesController extends AppController {
	var $name = 'Pages';
	var $helpers = array('Html', 'Session');
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
				Debug($persona);
				/*$albergado = $this->Albergados->findByPersonaId($persona["Personas"]["id"]);
			    $tmp = $this->Albergados->query('SELECT username FROM users WHERE id = '.($albergado['Albergados']['modified_user_id']));
				$usuario_ultimo_modificador = $tmp[0]['users']['username'];
				
				$this->loadModel('Images');
	
				Debug($this->Images->find('first', array(
									'conditions'=> array(
													"Images.id" => $persona["Personas"]["foto_imagen_id"]
														),
									'contain' => 'Tipoimages.title'
								)));
				
				$parametros = array(
							"albergado_id" => $albergado['Albergados']['id'],
							"usuario_ultimo_modificador" => $tmp[0]['users']['username'],
							"busqueda" => true,
							);
				$this->set($persona["Personas"]);
				$this->set($parametros);*/
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
}
