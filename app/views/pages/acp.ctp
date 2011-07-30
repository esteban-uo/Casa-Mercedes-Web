<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
<script type="text/javascript">
$(function(){
	$("div.action_info_acp a").hide();
	$("div.box_info_acp").mouseenter(function(){
		$(this).find("div.action_info_acp a").show();
	}).mouseleave(function(){
		$(this).find("div.action_info_acp a").hide();
    });
});
</script>
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
<?php if($busqueda): // Si buscó persona ?>
	<div id="acp_info_personas" class="box_info_acp posiciones_r">
	<h2>Ficha de Persona (<?php if($Albergado["id"]) echo "Albergado"; else echo "Dependiente"; ?>)</h2>
		<div class="posiciones_fl">
			<ul>
				<li>Nombre: <span class="formateotxt_strong"><?php echo $Persona['primer_nombre']; ?></span></li>
				<?php if($Persona['segundo_nombre']): ?>
				<li>Segundo Nombre: <span class="formateotxt_strong"><?php echo $Persona['segundo_nombre']; ?></span></li>
				<?php endif; ?>
				<li>Apellido Paterno: <span class="formateotxt_strong"><?php echo $Persona['primer_apellido']; ?></span></li>
				<li>Apellido Materno: <span class="formateotxt_strong"><?php echo $Persona['segundo_apellido']; ?></span></li>
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
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'personas','action' => 'view', $Persona['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<li><?php echo $this->Html->link('Ult. Editor', array('controller'=>'users','action' => 'view', $Persona['modified_user_id']), array('class' => 'action_acp_info boton_acp_ultimousuario')); ?></li>
			</ul>
		</div>
	</div>
	<?php if(isset($Albergado["id"])): // Si es Albergado ?>
	<div id="acp_info_albergado" class="box_info_acp posiciones_r">
	<h2>Ficha de Información de Albergado</h2>
		<div class="posiciones_fl">
			<ul>
				<li>Expediente: <span class="formateotxt_strong"><?php echo $Albergado['expediente']; ?></span></li>
				<li>Fecha Ingreso: <span class="formateotxt_strong"><?php echo $Albergado['fecha_ingreso']; ?></span></li>
				<li>Averiguación Previa: <span class="formateotxt_strong"><?php echo $Albergado['averiguacion_previa']; ?></span></li>
			</ul>
		</div>
		<div class="posiciones_fr">
			<h4>Infograma</h4>
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
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'albergados','action' => 'edit', $Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'albergados','action' => 'delete', $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el registro como albergado de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'albergados','action' => 'view', $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<li><?php echo $this->Html->link('Ult. Editor', array('controller'=>'users','action' => 'view', $Albergado['modified_user_id']), array('class' => 'action_acp_info boton_acp_ultimousuario')); ?></li>
			</ul>
		</div>
	</div>
	<div id="acp_info_dependientes" class="box_info_acp posiciones_r">
	<h2>Dependientes de <?php echo $Persona['nombre_completo'] ?></h2>
		<?php if($Dependiente): // Si hay Dependientes ?>
		<?php foreach($Dependiente as $llave => $valor): ?>
		<div class="posiciones_r">
			<ul>
				<li><span class="formateotxt_strong"><?php echo $Dependiente[$llave]['Persona']['nombre_completo']; ?></span></li>
			</ul>
			<div class="action_info_acp">
				<ul>
					<li><?php echo $this->Html->link("Modificar", array('controller'=>'dependientes','action' => 'edit', $Dependiente[$llave]['Dependiente']['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
					<li><?php echo $this->Html->link("Eliminar", array('controller'=>'dependientes','action' => 'delete', $Dependiente[$llave]['Dependiente']['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el registro como albergado de %s?', true),$Persona['nombre_completo'])); ?></li>
					<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'dependientes','action' => 'view', $Dependiente[$llave]['Dependiente']['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
					<li><?php echo $this->Html->link('Ult. Editor', array('controller'=>'users','action' => 'view', $Dependiente[$llave]['Dependiente']['modified_user_id']), array('class' => 'action_acp_info boton_acp_ultimousuario')); ?></li>
				</ul>
			</div>
		</div>
		<?php endforeach; ?>
		<?php else: // Si hay Dependientes ?>
		<div class="action_info_acp">
			<ul>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'dependientes','action' => 'add', $Persona['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
			</ul>
		</div>
		<?php endif; // Si hay Dependientes ?>
	</div>
	<div id="acp_info_familia" class="box_info_acp posiciones_r">
	<h2>Información de Familia</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Familia']['id'])): // Si hay agregadas Familia ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'familias','action' => 'edit', $Albergado['Familia']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'familias','action' => 'delete',$Albergado['Familia']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'familias','action' => 'view', $Albergado['Familia']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay agregadas Familia ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'familias','action' => 'add', $Persona['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay agregadas Familia ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_sociales" class="box_info_acp posiciones_r">
	<h2>Información de Estudio Social</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Social']['id'])): // Si hay ficha Social ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'sociales','action' => 'edit', $Albergado['Social']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'sociales','action' => 'delete',$Albergado['Social']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'sociales','action' => 'view', $Albergado['Social']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha Social?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'sociales','action' => 'add', $Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha Social ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_socio_economicos" class="box_info_acp posiciones_r">
	<h2>Información de Estudio Socio Economico</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['SocioEconomico']['id'])): // Si hay ficha Estudio Social ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'socio_economicos','action' => 'edit', $Albergado['SocioEconomico']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'socio_economicos','action' => 'delete', $Albergado['SocioEconomico']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'socio_economicos','action' => 'view', $Albergado['SocioEconomico']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha Social?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'socio_economicos','action' => 'add', $Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha Social ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_problematica" class="box_info_acp posiciones_r">
	<h2>Información de Problematica</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Problematica']['id'])): // Si hay ficha de Problematica ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'problematicas','action' => 'edit', $Albergado['Problematica']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'problematicas','action' => 'delete', $Albergado['Problematica']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'problematicas','action' => 'view', $Albergado['Problematica']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha de Problematica ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'problematicas','action' => 'add', $Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha de Problematica ?>
			</ul>
		</div>
	</div>
	<?php endif; // Si es Albergado ?>
	<div id="acp_info_documentos" class="box_info_acp posiciones_r">
	<h2>Documentos pertenecientes</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($Documento["id"])): // Si hay documento ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'documentos','action' => 'edit', $Documento['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'documentos','action' => 'delete', $Documento['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'documentos','action' => 'view', $Documento['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay documento?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'documentos','action' => 'add', $Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay documento ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_estados_salud" class="box_info_acp posiciones_r">
	<h2>Ficha de Estado de Salud</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($EstadosSalud["id"])): // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'estados_saluds','action' => 'edit',$EstadosSalud['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'estados_saluds','action' => 'delete', $EstadosSalud['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el Estado de Salud de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'estados_saluds','action' => 'view', $EstadosSalud['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'estados_saluds','action' => 'add', $Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay Estado de Salud  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_nacimientos" class="box_info_acp posiciones_r">
	<h2>Ficha de Nacimiento</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($Nacimiento["id"])): // Si hay Nacimiento ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'nacimientos','action' => 'edit',$Nacimiento['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'nacimientos','action' => 'delete', $Nacimiento['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el nacimiento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'nacimientos','action' => 'view', $Nacimiento['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'nacimientos','action' => 'add', $Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay Estado de Salud  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_vestimenta" class="box_info_acp posiciones_r">
	<h2>Vestimenta</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($Vestimenta["id"])): // Si hay Vestimenta ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'vestimentas','action' => 'edit',$Vestimenta['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'vestimentas','action' => 'delete', $Vestimenta['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar la vestimenta de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'vestimentas','action' => 'view', $Vestimenta['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'vestimentas','action' => 'add', $Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay Estado de Salud  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_extra" class="box_info_extra_acp">
		<ul>
			<li><?php echo $this->Html->link(__('Generar Reporte de Ficha de Identificación', true), array('controller'=>'reportes','action' => 'ficha_identificacion', 'id'=> $Persona['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Generar Reporte de Estudio Social', true), array('controller'=>'reportes','action' => 'estudio_social', 'id'=> $Persona['id'])); ?></li>
		</ul>
	</div>
<?php else: // Si buscó persona ?>
	 <?php echo
    $this->element('estadisticas',
		array(
		"cache" => "+1 hour",
		'key'=>'estadisticas_key'
		)
    );
	?>
<?php endif; // Si buscó persona ?>
</div>