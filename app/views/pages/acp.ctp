<div id="acp_pagina_principal">
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
<h3>Búsqueda de Personas</h3>
<?php
	echo $this->Form->create(array('action' => 'acp'));
	echo $this->Form->input('Persona.search', array("label"=>false,"placeholder" => "Nombre Completo", "class" => "input_style input_buscar", "div"=>array("class"=>"busqueda_acp")));
	echo $this->Form->end(array("name"=>"Buscar", "label"=>"Buscar", "class" => "button_form boton_buscar", "div"=>array("class"=>"fl")));
?>
<div class="cl"></div>
<div id="contenido_acp_index" class="parag">
<?php if($busqueda): // Si buscó persona ?>
	<div id="acp_info_personas" class="box_info_acp posiciones_r">
	<h2>Ficha de Persona (<?php if($Albergado["id"]) echo "Albergada"; else echo "Hijo o hija"; ?>)</h2>
		<div class="fl">
			<ul>
				<li>Nombre: <span class="formateotxt_strong"><?php echo $Persona['primer_nombre']; ?></span></li>
				<?php if($Persona['segundo_nombre']): ?>
				<li>Segundo Nombre: <span class="formateotxt_strong"><?php echo $Persona['segundo_nombre']; ?></span></li>
				<?php endif; ?>
				<li>Apellido Paterno: <span class="formateotxt_strong"><?php echo $Persona['primer_apellido']; ?></span></li>
				<li>Apellido Materno: <span class="formateotxt_strong"><?php echo $Persona['segundo_apellido']; ?></span></li>
			</ul>
		</div>
		<div class="fr">
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
		<div class="cb"></div>
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
	<h2>Ficha de Canalización</h2>
		<div>
			<ul>
				<li>Expediente: <span class="formateotxt_strong"><?php echo $Albergado['expediente']; ?></span></li>
				<li>Fecha Ingreso: <span class="formateotxt_strong"><?php echo $Albergado['fecha_ingreso']; ?></span></li>
				<li>Averiguación Previa: <span class="formateotxt_strong"><?php echo $Albergado['averiguacion_previa']; ?></span></li>
			</ul>
		</div>
		<div class="action_info_acp">
			<ul>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'albergados','action' => 'edit', $Albergado['id'], 'personaId'=>$Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'albergados','action' => 'delete', $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el registro como albergada de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'albergados','action' => 'view', $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<li><?php echo $this->Html->link('Ult. Editor', array('controller'=>'users','action' => 'view', $Albergado['modified_user_id']), array('class' => 'action_acp_info boton_acp_ultimousuario')); ?></li>
			</ul>
		</div>
	</div>
	<div id="acp_info_dependientes" class="box_info_acp <?php if(!isset($Dependiente[0]['Dependiente'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Hijas(os) de <?php echo $Persona['nombre_completo'] ?></h2>
		<?php if(isset($Dependiente[0]['Dependiente'])): // Si hay Dependientes ?>
		<?php foreach($Dependiente as $llave => $valor): ?>
		<div class="posiciones_r">
			<ul>
				<li><span class="formateotxt_strong"><?php echo $Dependiente[$llave]['Persona']['nombre_completo']; ?></span></li>
			</ul>
			<div class="action_info_dependientes_acp">
				<ul>
					<li><?php echo $this->Html->link("Modificar", array('controller'=>'dependientes','action' => 'edit', $Dependiente[$llave]['Dependiente']['id'], "albergadoId"=>$Albergado['id'])); ?></li>
					<li><?php echo $this->Html->link("Quitar como Hijo(a)", array('controller'=>'dependientes','action' => 'delete', $Dependiente[$llave]['Dependiente']['id']), array(), sprintf(__('¿Eliminar el registro como albergado de %s?', true),$Persona['nombre_completo'])); ?></li>
					<li><?php echo $this->Html->link("Información Completa", array('controller'=>'pages','action' => 'acp', "persona_id"=>$Dependiente[$llave]['Persona']['id'])); ?></li>
				</ul>
			</div>
		</div>
		<?php endforeach; ?>
		<?php endif; // Si hay Dependientes ?>
		<div class="action_info_acp">
			<ul>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'dependientes','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
			</ul>
		</div>
	</div>
	<div id="acp_info_familia" class="box_info_acp <?php if(!isset($Albergado['Familia']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Información de Familia</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Familia']['id'])): // Si hay agregadas Familia ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'familias','action' => 'edit', $Albergado['Familia']['id'], "albergadoId" => $Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'familias','action' => 'delete',$Albergado['Familia']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'familias','action' => 'view', $Albergado['Familia']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay agregadas Familia ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'familias','action' => 'add', "albergadoId" => $Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay agregadas Familia ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_sociales" class="box_info_acp <?php if(!isset($Albergado['Social']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Información de Roles Sociales</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Social']['id'])): // Si hay ficha Social ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'sociales','action' => 'edit', $Albergado['Social']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'sociales','action' => 'delete',$Albergado['Social']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'sociales','action' => 'view', $Albergado['Social']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha Social?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'sociales','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha Social ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_socio_economicos" class="box_info_acp <?php if(!isset($Albergado['SocioEconomico']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Información de Estudio Socio Economico</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['SocioEconomico']['id'])): // Si hay ficha Estudio Social ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'socio_economicos','action' => 'edit', $Albergado['SocioEconomico']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'socio_economicos','action' => 'delete', $Albergado['SocioEconomico']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'socio_economicos','action' => 'view', $Albergado['SocioEconomico']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha Social?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'socio_economicos','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha Social ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_problematica" class="box_info_acp <?php if(!isset($Albergado['Problematica']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Información de Problematica</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Problematica']['id'])): // Si hay ficha de Problematica ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'problematicas','action' => 'edit', $Albergado['Problematica']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'problematicas','action' => 'delete', $Albergado['Problematica']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'problematicas','action' => 'view', $Albergado['Problematica']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha de Problematica ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'problematicas','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha de Problematica ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_ingresos" class="box_info_acp <?php if(!isset($Albergado['Ingresos']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Información de Egresos</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Ingresos']['id'])): // Si hay ficha de Ingresos ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'ingresos','action' => 'edit', $Albergado['Ingresos']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'ingresos','action' => 'delete', $Albergado['Ingresos']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'ingresos','action' => 'view', $Albergado['Ingresos']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha de Ingresos ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'ingresos','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha de Ingresos ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_datos" class="box_info_acp <?php if(!isset($Albergado['Dato']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Historia de Vida</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Dato']['id'])): // Si hay ficha de Datos ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'datos','action' => 'edit', $Albergado['Dato']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'datos','action' => 'delete', $Albergado['Dato']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'datos','action' => 'view', $Albergado['Dato']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else: // Si hay ficha de Datos ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'datos','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif; // Si hay ficha de Datos ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_datos_albergado" class="box_info_acp <?php if(!isset($Albergado['DatosAlbergado']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Datos Generales</h2>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['DatosAlbergado']['id'])): // Si hay Datos de albergado ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'datos_albergados','action' => 'edit', $Albergado['DatosAlbergado']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'datos_albergados','action' => 'delete', $Albergado['DatosAlbergado']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'datos_albergados','action' => 'view', $Albergado['DatosAlbergado']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else:  // Si hay Datos de albergado  ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'datos_albergados','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif;  // Si hay Datos de albergado  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_datos_escolaridad" class="box_info_acp <?php if(!isset($Albergado['Escolaridad']['id'])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Escolaridad</h2>
	<?php Debug($Albergado['Escolaridad']); ?>
		<div class="action_info_acp">
			<ul>
		<?php if(isset($Albergado['Escolaridad']['id'])): // Si hay Datos de escolaridad ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'escolaridades','action' => 'edit', $Albergado['Escolaridad']['id'], "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'escolaridades','action' => 'delete', $Albergado['Escolaridad']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'escolaridades','action' => 'view', $Albergado['Escolaridad']['id'], $Albergado['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
		<?php else:  // Si hay Datos de escolaridad  ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'escolaridades','action' => 'add', "albergadoId"=>$Albergado['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
		<?php endif;  // Si hay Datos de escolaridad  ?>
			</ul>
		</div>
	</div>
	<?php endif; // Si es Albergado ?>
	<div id="acp_info_documentos" class="box_info_acp <?php if(!isset($Documento["id"])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Documentos</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($Documento["id"])): // Si hay documento ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'documentos','action' => 'edit', $Documento['id'], "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'documentos','action' => 'delete', $Documento['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el documento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'documentos','action' => 'view', $Documento['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay documento?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'documentos','action' => 'add', "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay documento ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_estados_salud" class="box_info_acp <?php if(!isset($EstadosSalud["id"])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Ficha de Estado de Salud</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($EstadosSalud["id"])): // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'estados_saluds','action' => 'edit',$EstadosSalud['id'], "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'estados_saluds','action' => 'delete', $EstadosSalud['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el Estado de Salud de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'estados_saluds','action' => 'view', $EstadosSalud['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'estados_saluds','action' => 'add', "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay Estado de Salud  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_nacimientos" class="box_info_acp <?php if(!isset($Nacimiento["id"])) echo "box_new_info_acp"; ?>  posiciones_r">
	<h2>Ficha de Nacimiento</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($Nacimiento["id"])): // Si hay Nacimiento ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'nacimientos','action' => 'edit',$Nacimiento['id'], "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'nacimientos','action' => 'delete', $Nacimiento['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar el nacimiento de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'nacimientos','action' => 'view', $Nacimiento['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'nacimientos','action' => 'add', "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay Estado de Salud  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_vestimenta" class="box_info_acp <?php if(!isset($Vestimenta["id"])) echo "box_new_info_acp"; ?> posiciones_r">
	<h2>Vestimenta</h2>
		<div class="action_info_acp">
			<ul>
				<?php if(isset($Vestimenta["id"])): // Si hay Vestimenta ?>
				<li><?php echo $this->Html->link("Modificar", array('controller'=>'vestimentas','action' => 'edit',$Vestimenta['id'], "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_modificar')); ?></li>
				<li><?php echo $this->Html->link("Eliminar", array('controller'=>'vestimentas','action' => 'delete', $Vestimenta['id']), array('class' => 'action_acp_info boton_acp_eliminar'), sprintf(__('¿Eliminar la vestimenta de %s?', true),$Persona['nombre_completo'])); ?></li>
				<li><?php echo $this->Html->link("Inf. Completa", array('controller'=>'vestimentas','action' => 'view', $Vestimenta['id']), array('class' => 'action_acp_info boton_acp_info')); ?></li>
				<?php else: // Si hay Estado de Salud ?>
				<li><?php echo $this->Html->link("Crear", array('controller'=>'vestimentas','action' => 'add', "personaId"=>$Persona['id']), array('class' => 'action_acp_info boton_acp_crear')); ?></li>
				<?php endif; // Si hay Estado de Salud  ?>
			</ul>
		</div>
	</div>
	<div id="acp_info_extra" class="box_info_extra_acp">
		<ul>
			<li><?php echo $this->Html->link(__('Generar Reporte de Ficha de Identificación', true), array('controller'=>'reportes','action' => 'convertPdf', 'ruta'=> 'ficha_identificacion', 'id' => $Persona['id'])); ?></li>
			<li><?php echo $this->Html->link(__('Generar Reporte de Estudio Social', true), array('controller'=>'reportes','action' => 'convertPdf', 'ruta'=> 'estudio_social', 'id'=> $Persona['id'])); ?></li>
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
</div>