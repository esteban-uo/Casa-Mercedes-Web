<?php
	/**
	* @author Darknavi
	* Ayudante para la generación de datos especificos para reportes e muestra de información
	*/
class HerramientasCalculosHelper extends AppHelper {
	
	public function obtenerEdadYDM($fecha, $separador){
		$datosFecha = explode($separador, $fecha);
		$datosFechaHoy = explode("-", date("Y-d-m"));
		return $datosFechaHoy[0]-$datosFecha[0];
	}
}
?>