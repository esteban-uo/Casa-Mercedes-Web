<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<p class="parag">Búsqueda de personas</p>
<?php
	echo $this->Form->create(array('action' => 'filtros'));
?>
<?php
	echo $this->Form->input('Persona.Nombre', array("label"=>true, "class" => "input_style input_buscar", "div"=>array("class"=>"posiciones_fl")));
	echo $this->Form->input('Persona.Edad_minima', array("label"=>true, "class" => "input_style input_buscar", "div"=>array("class"=>"posiciones_fl")));
	echo $this->Form->input('Persona.Edad_maxima', array("label"=>true, "class" => "input_style input_buscar", "div"=>array("class"=>"posiciones_fl")));
	echo $this->Form->end(array("name"=>"Buscar", "label"=>"Buscar", "class" => "button_form boton_buscar", "div"=>array("class"=>"posiciones_fl")));
?>