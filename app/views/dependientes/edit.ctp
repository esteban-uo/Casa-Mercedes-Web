<div class="dependientes form">
<?php echo $this->Form->create('Dependiente');?>
	<fieldset>
		<legend><?php __('Modificar Dependiente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('expediente');
		echo $this->Form->input('modificado_por', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Dependiente.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Dependiente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Dependientes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>