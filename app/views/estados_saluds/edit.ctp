<div class="estadosSaluds form">
<?php echo $this->Form->create('EstadosSalud');?>
	<fieldset>
		<legend><?php __('Edit Estados Salud'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('tipo_sangre');
		echo $this->Form->input('peso');
		echo $this->Form->input('alergias');
		echo $this->Form->input('lesiones_fisicas');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('enfermedades_cronicas');
		echo $this->Form->input('otra_enfermedad_id');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('EstadosSalud.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('EstadosSalud.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Estados Saluds', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otras Enfermedades', true), array('controller' => 'otras_enfermedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otra Enfermedad', true), array('controller' => 'otras_enfermedades', 'action' => 'add')); ?> </li>
	</ul>
</div>