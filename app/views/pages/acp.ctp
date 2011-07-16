<p class="parag">Búsqueda de personas por Nombre Completo</p>
<?php
	echo $this->Form->create(array('action' => 'acp'));
?>
<?php
	echo $this->Form->input('Persona.search', array("label"=>false, "class" => "input_style input_buscar", "div"=>array("class"=>"posiciones_fl")));
	echo $this->Form->end(array("name"=>"Buscar", "label"=>"Buscar", "class" => "button_form boton_buscar", "div"=>array("class"=>"posiciones_fl")));
?>
<div class="posiciones_cl"></div>
<div id="contenido_acp_index" class="parag">
<?php if($busqueda): ?>
	<div id="acp_info_personas" class="box_info_acp posiciones_r">
		<div class="posiciones_fl">
			<ul>
				<li>Nombre: <span class="formateotxt_strong"><?php echo $Persona['primer_nombre']; ?></span></li>
				<?php if($Persona['segundo_nombre']): ?>
				<li>Segundo Nombre: <span class="formateotxt_strong"><?php echo $Persona['segundo_nombre']; ?></span></li>
				<?php endif; ?>
				<li>Apellido Paterno: <span class="formateotxt_strong"><?php echo $Persona['primer_apellido']; ?></span></li>
				<li>Segundo Materno: <span class="formateotxt_strong"><?php echo $Persona['segundo_apellido']; ?></span></li>
			</ul>
		</div>
		<div class="posiciones_fr">
				<?php
					echo $this->ImagenesGaleria->obtenerImagen(true,
																$FotoImagen["Tipoimage"]["title"],
																$FotoImagen["url"],
																array(
																	"alt" => $Persona['nombre_completo'],
																	"class" => "imagen_perfil_box" 
																));
				?>
		</div>
		<div class="posiciones_cl"></div>
		<div class="action_info_acp">
			<ul>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'personas','action' => 'edit', $Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'personas','action' => 'delete', $Persona['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar a %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'personas','action' => 'view', $Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link('Ult. Editor', array('controller'=>'users','action' => 'view', $Persona['modified_user_id']), array('class' => 'action_acp_info boton_acp_ultimousuario')); ?></li>
			</ul>
		</div>
	</div>
	<div id="acp_info_albergado" class="box_info_acp posiciones_r">
		<div class="posiciones_fl">
			<ul>
				<li>Expediente: <span class="formateotxt_strong"><?php echo $Albergado['expediente']; ?></span></li>
				<li>Fecha Ingreso: <span class="formateotxt_strong"><?php echo $Albergado['fecha_ingreso']; ?></span></li>
				<li>Averiguación Previa: <span class="formateotxt_strong"><?php echo $Albergado['averiguacion_previa']; ?></span></li>
			</ul>
		</div>
		<div class="posiciones_fr">
				<?php
					echo $this->ImagenesGaleria->obtenerImagen(true,
																$Albergado["FotoImagen"]["Tipoimage"]["title"],
																$Albergado["FotoImagen"]["url"],
																array(
																	"alt" => $Persona['nombre_completo'],
																	"class" => "imagen_infograma_box" 
																));
				?>
		</div>
		<div class="posiciones_cl"></div>
		<div class="action_info_acp">
			<ul>
				<li><?php echo $this->Html->link("Modificar Información", array('controller'=>'personas','action' => 'edit/'.$Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'personas','action' => 'delete', $Persona['id']), array('class' => 'action_acp_info boton_acp_modificar'), sprintf(__('¿Eliminar a %s?', true),$Persona['nombre_completo'])); ?></li>
			</ul>
		</div>
	</div>
	<div id="acp_info_extra" class="box_info_acp">
		<ul>
			<li><?php echo $this->Html->link(__('Generar Reporte de Ficha de Identificación', true), array('controller'=>'reportes','action' => 'ficha_identificacion', 'id'=> $Persona['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Generar Reporte de Estudio Social', true), array('controller'=>'reportes','action' => 'estudio_social', 'id'=> $Persona['id'])); ?></li>
		</ul>
	</div>
<?php endif; ?>
</div>