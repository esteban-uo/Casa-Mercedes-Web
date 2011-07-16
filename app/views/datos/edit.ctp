<div class="datos form">
<?php echo $this->Form->create('Dato');?>
	<fieldset>
		<legend><?php __('Modificar Dato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('plan_social');
		echo $this->Form->input('historia_de_vida');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Registro', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Dato.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Dato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Datos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>