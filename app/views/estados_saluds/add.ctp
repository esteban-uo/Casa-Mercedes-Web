<div class="estadosSaluds form">
<?php echo $this->Form->create('EstadosSalud');?>
	<fieldset>
		<legend><?php __('Agregar Estados Salud'); ?></legend>
	<?php
		echo $this->Form->input('persona_id');
		echo $this->Form->input('tipo_sangre');
		echo $this->Form->input('peso');
		echo $this->Form->input('altura');
		echo $this->Form->input('alergias');
		echo $this->Form->input('lesiones_fisicas');
		echo $this->Form->input('discapacidad');
		echo $this->Form->input('enfermedades_cronicas');
		echo $this->Form->input('otra_enfermedad_id');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Estados Saluds', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Otras Enfermedades', true), array('controller' => 'otras_enfermedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Otra Enfermedad', true), array('controller' => 'otras_enfermedades', 'action' => 'add')); ?> </li>
	</ul>
</div>