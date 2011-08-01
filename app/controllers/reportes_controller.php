<?php
class ReportesController extends AppController {
	var $name = 'Reportes';
	var $uses = array();
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
	/**
	* Genera reportes segun la selección tipo de reporte y la persona buscada
	*/
	function index() {
		$this->layout = "panel_control";
		Debug($this->data);
		//Todo ejecuta método para la generacióe reporte segun el tipo selecionado
	}

	function ficha_identificacion() {
		$this->layout = "reportes";
		Debug($this->params["named"]);
		//TODO genera reporte ficha de identificació		
	}
	
	function estudio_social(){
		$this->layout = "reportes";
		//TODO genera reporte estudio_social
		
	}
}
