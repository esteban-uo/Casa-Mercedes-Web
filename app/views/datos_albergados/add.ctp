<div class="datosAlbergados form">
<?php echo $this->Form->create('DatosAlbergado');?>
	<fieldset>
		<legend><?php __('Registrar Datos del Albergado'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('consumo_sustancias');
		echo $this->Form->input('perforaciones');
		echo $this->Form->input('tatuajes');
		echo $this->Form->input('delitos');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Datos Albergados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>