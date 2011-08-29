<div id="acp_filtros">
<h1>Búsqueda por filtros</h1>
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
	<p><?php echo $Mensaje; ?></p>
	<p><?php echo $this->Html->link('Exportar resultados a hoja de Excel', array(
																			'controller'=>'pages',
																			'action' => 'generarExcelFiltro'
																			), array("class"=>"link_verInfopersona")); ?>
	</p>
	<?php foreach($Personas as $Persona): ?>
		<div class="box_info_filtros">
			<h3><?php echo $Persona['Persona']['nombre_completo']; ?></h3>
			<ul class="fl">
				<li>Casa que pertenece: <span class="formateotxt_strong"><?php echo (isset($Persona['Albergado']['Casa']['direccion']))? $Persona['Albergado']['Casa']['direccion'] : ""; ?></span></li>
				<li>No. Expediente: <span class="formateotxt_strong"><?php echo (isset($Persona['Albergado']['expediente']))? $Persona['Albergado']['expediente'] : ""; ?></span></li>
				<li>Edad: <span class="formateotxt_strong"><?php echo (isset($Persona['Nacimiento']['fecha_nacimiento']))? $Persona['Nacimiento']['fecha_nacimiento'] : ""; ?></span></li>
			</ul>
			<ul class="fl">
				<li>Estado de Nacimiento: <span class="formateotxt_strong"><?php echo (isset($Persona['Nacimiento']['Estado']['title']))? $Persona['Nacimiento']['Estado']['title'] : ""; ?></span></li>
				<li>Municipio de Nacimiento: <span class="formateotxt_strong"><?php echo (isset($Persona['Nacimiento']['Municipio']['title']))? $Persona['Nacimiento']['Municipio']['title'] : ""; ?></span></li>
				<li>Fecha Egreso e Ingreso: <span class="formateotxt_strong"><?php echo (isset($Persona['Persona']['fecha_ingreso']))? $Persona['Persona']['fecha_ingreso'] : ""; ?></span></li>
				<li>No. Averiguación Previa: <span class="formateotxt_strong"><?php echo (isset($Persona['Albergado']['averiguacion_previa']))? $Persona['Albergado']['averiguacion_previa'] : ""; ?></span></li>
			</ul>
			<div class="cl"></div>
			<ul>
				<li><?php echo $this->Html->link('Ver Información Completa', array('controller'=>'pages','action' => 'acp', "persona_id" => $Persona['Persona']['id']), array("class"=>"link_verInfopersona")); ?></li>
				<li><?php echo $this->Html->link('Reporte de Ficha de Identificación', array('controller'=>'reportes','action' => 'convertPdf', 'ruta'=> 'ficha_identificacion', 'id' => $Persona['Persona']['id']), array("class"=>"link_verInfopersona")); ?></li>
				<li><?php echo $this->Html->link('Reporte de Estudio Social', array('controller'=>'reportes','action' => 'convertPdf', 'ruta'=> 'estudio_social', 'id'=> $Persona['Persona']['id']), array("class"=>"link_verInfopersona")); ?></li>
			</ul>
		</div>
	<?php endforeach;?>
	<?php else:?>
		<p>Sin resultados para mostrar</p>
	<?php endif; ?>
<?php endif; ?>
</div>