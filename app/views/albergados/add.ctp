<div class="albergados form">
<?php echo $form->create('Albergado');
?>
	<fieldset>
		<legend><?php __('Add Albergado'); ?></legend>
	<?php
		echo $this->Form->input('persona_id');
		echo $this->Form->input('numero_embarazos');
		echo $this->Form->input('expediente');
		echo $this->Form->input('casa_id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('embarazo_actual');
		echo $this->Form->input('cant_hijos');
		echo $this->Form->input('remitida_por');
		echo $this->Form->input('averiguacion_previa');
		echo $this->Form->input('familiograma_imagen_id');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>