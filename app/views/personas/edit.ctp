<div class="personas form">
<?php echo $this->Form->create('Persona');?>
	<fieldset>
		<legend><?php __('Edit Persona'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('primer_nombre');
		echo $this->Form->input('segundo_nombre');
		echo $this->Form->input('primer_apellido');
		echo $this->Form->input('segundo_apellido');
		echo $this->Form->input('sexo');
		echo $this->Form->input('status');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('foto_imagen_id', array("type"=>"text"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Persona.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Persona.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('action' => 'index'));?></li>
	</ul>
</div>