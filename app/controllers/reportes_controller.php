<?php
class ReportesController extends AppController {
	var $name = 'Reportes';
	var $uses = array();
	
	/**
	* Genera reportes segun la selecci�n de tipo de reporte y la persona buscada
	*/
	function index() {
		$this->layout = "panel_control";
		//TODO ejecuta m�todo para la generaci�n de reporte segun el tipo selecionado
	}

	function ficha_identificacion() {
		$this->layout = "reportes";
		//TODO genera reporte ficha de identificaci�n
		
	}
	
	function estudio_social(){
		$this->layout = "reportes";
		//TODO genera reporte estudio_social
		
	}
}