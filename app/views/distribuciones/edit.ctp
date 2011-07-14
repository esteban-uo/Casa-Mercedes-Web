<div class="distribuciones form">
<?php echo $this->Form->create('Distribucion');?>
	<fieldset>
		<legend><?php __('Modificar Distribucion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('descripcion');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Distribucion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Distribucion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Distribuciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>