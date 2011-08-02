<script type="text/javascript" src="../js/jquery.min.js"></script>
<script type="text/javascript" src="../js/jquery.form.js"></script>
<script type="text/javascript" src="../js/jquery.cakephp.js"></script>
<script type="text/javascript">
$(function(){
	$("#PersonaFotoImagenId").cakephp({
										"controlador" : "images",
										"accion" : "add",
										"claseAccion" : "",
										"eMensajeValidacionError" : ".error-message",
										"eMensajeControlador" : "#flashMessage",
										"eMensajeInputId" : "#idMessage",
										"label" : "Subir Imagen",
										"mensajeCorrecto" : "<p>Ok</p>",
										"rutaJs" : "../"
										});
});
</script>
<div class="personas form">
<?php echo $this->Form->create('Persona');?>
	<fieldset>
		<legend><?php __('Agregar Persona: Datos de la Persona'); ?></legend>
	<?php
		echo $this->Form->input('primer_nombre', array("label"=>"Nombre", "class" => "input_gen"));
		echo $this->Form->input('segundo_nombre', array("label"=>"Segundo nombre", "class" => "input_gen"));
		echo $this->Form->input('primer_apellido', array("label"=>"Apellido paterno", "class" => "input_gen"));
		echo $this->Form->input('segundo_apellido', array("label"=>"Apellido materno", "class" => "input_gen"));
		echo $this->Form->input('sexo');
		echo $this->Form->input('status', array("label"=>"Situación en la que se encuentra", "class" => "input_gen"));
		echo $this->Form->input('fecha_ingreso', array("label"=>"Fecha de ingreso", "class" => "input_gen"));
		echo $this->Form->input('foto_imagen_id', array("type"=>"text", "div"=>array("class"=>"")));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), "class" => "input_gen", 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Lista Personas', true), array('action' => 'index'));?></li>
	</ul>
</div>