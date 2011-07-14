<div class="otraEnfermedads form">
<?php echo $this->Form->create('OtraEnfermedad');?>
	<fieldset>
		<legend><?php __('Modificar Otra Enfermedad'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('enfermedad');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('enfermedad_cronica');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('OtraEnfermedad.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('OtraEnfermedad.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Otra Enfermedades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Estados Salud', true), array('controller' => 'estados_saluds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Estados Salud', true), array('controller' => 'estados_saluds', 'action' => 'add')); ?> </li>
	</ul>
</div>