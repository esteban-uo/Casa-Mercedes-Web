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
		//TODO genera reporte ficha de identificació		
	}
	
	function estudio_social(){
		$this->layout = "reportes";
		//TODO genera reporte estudio_social
	}
	
	function convertPdf()
	{
		
		require_once ('vendors/dompdf/dompdf_config.inc.php'); 
		
		$content =  file_get_contents($this->obtenerRuta($this->params["named"]['ruta']));
		
		
		$dompdf = new DOMPDF();
		$dompdf->load_html($content);
		$dompdf->set_paper("a4", "landscape" );
		$dompdf->render();
		$dompdf->stream('Reporte_'.date('d_M_Y').'.pdf');
		
	}
	
	function obtenerRuta($Text)
	{
		$ruta = explode('X',$Text);
		
		return Router::url('/', true) . 'reportes/'.$ruta[0].'/id:'.$ruta[1];
	
	}
	
	
}
