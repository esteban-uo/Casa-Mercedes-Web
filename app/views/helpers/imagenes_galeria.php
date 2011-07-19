<?php
	/**
	* @author Darknavi
	* Ayudante para la creacion del tag img segun los requerimientos del controlador de imagenes
	*/
class ImagenesGaleriaHelper extends AppHelper {
	var $helpers = array('Html');
	
	/**
	*  @author Darknavi
	*	Genera tag <img /> a partir del html helper, busca el directorio correcto y decide si es normal o thumb
	*/
    public function obtenerImagen($miniatura = true, $directorio = "", $urlImagen, $opciones) {
		($directorio == "")? $ds = "": $ds = "/";
		if($miniatura){
			$urlImagen = substr($urlImagen, 0, (strrpos($urlImagen, ".", 0))).".th".substr($urlImagen, (strrpos($urlImagen, ".", 0)));
			return $this->Html->image(Inflector::slug($directorio,"_").$ds.$urlImagen, $opciones);
		}else{
			return $this->Html->image(Inflector::slug($directorio,"_").$ds.$urlImagen, $opciones);
		}
    }
}
?>