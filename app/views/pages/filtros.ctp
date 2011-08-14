<div id="acp_filtros">
<h1>Búsqueda Avanzada</h1>
<?php
	echo $this->Form->create(array('action' => 'filtros'));
	echo $this->Form->select('Persona.edad.condicion', array(
															"<" => "Mayor a",
															">" => "Menor a",
															"=" => "Igual a"
															), 0, array("empty"=>null, "class"=>"fl input_style input_buscar select_condicion"));
	echo $this->Form->input('Persona.edad.anos', array("label"=>false,"placeholder" => "Años", "class" => "input_style input_buscar", "div"=>array("class"=>"fl")));
	echo $this->Form->input('Persona.edad.meses', array("label"=>false,"placeholder" => "Meses", "class" => "input_style input_buscar", "div"=>array("class"=>"fl")));
	echo $this->Form->input('Persona.casa', array("label"=>false,"placeholder" => "Casa a la que pertenece", "class" => "input_style input_buscar", "div"=>array("class"=>"busqueda_acp")));
	echo $this->Form->end(array("name"=>"Buscar", "label"=>"Buscar", "class" => "button_form boton_buscar", "div"=>array("class"=>"fl")));
?>
<div class="cl"></div>
<?php if(isset($Personas)): ?>
	<?php if($Personas != null): ?>
	<?php foreach($Personas as $Persona): ?>
		<div class="box_info_filtros">
			<h3><?php echo $Persona['Persona']['nombre_completo']; ?></h3>
			<ul class="fl">
				<li>Casa que pertenece: <span class="formateotxt_strong"><?php echo $Persona['Albergado']['Casa']['direccion']; ?></span></li>
				<li>No. Expediente: <span class="formateotxt_strong"><?php echo $Persona['Albergado']['expediente']; ?></span></li>
				<li>Edad: <span class="formateotxt_strong"><?php echo $Persona['Nacimiento']['fecha_nacimiento']; ?></span></li>
			</ul>
			<ul class="fl">
				<li>Estado de Nacimiento: <span class="formateotxt_strong"><?php echo $Persona['Nacimiento']['Estado']['title']; ?></span></li>
				<li>Municipio de Nacimiento: <span class="formateotxt_strong"><?php echo $Persona['Nacimiento']['Municipio']['title']; ?></span></li>
				<li>Fecha Egreso e Ingreso: <span class="formateotxt_strong"><?php echo $Persona['Persona']['fecha_ingreso']; ?></span></li>
				<li>No. Averiguación Previa: <span class="formateotxt_strong"><?php echo $Persona['Albergado']['averiguacion_previa']; ?></span></li>
			</ul>
			<div class="cl"></div>
			<p>
				<?php
				echo $this->Html->link('Ver Información Completa', array('controller'=>'pages','action' => 'acp', "nombre_completo" => $Persona['Persona']['nombre_completo']), array("class"=>"link_verInfopersona")); ?>
			</p>
		</div>
	<?php endforeach;?>
	<?php else:?>
		<p>Sin resultados para mostrar</p>
	<?php endif; ?>
<?php endif; ?>
</div>