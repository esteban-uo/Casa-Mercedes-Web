<div class="otraEnfermedads form">
<?php echo $this->Form->create('OtraEnfermedad');?>
	<fieldset>
		<legend><?php __('Add Otra Enfermedad'); ?></legend>
	<?php
		echo $this->Form->input('enfermedad');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('enfermedad_cronica');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Otra Enfermedads', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Estados Saluds', true), array('controller' => 'estados_saluds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estados Salud', true), array('controller' => 'estados_saluds', 'action' => 'add')); ?> </li>
	</ul>
</div>