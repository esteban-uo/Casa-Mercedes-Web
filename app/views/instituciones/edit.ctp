<div class="instituciones form">
<?php echo $this->Form->create('Institucion');?>
	<fieldset>
		<legend><?php __('Modificar Institución'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('institucion', array("label"=>"Institución"));
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('fecha_egreso');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Institucion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Institucion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Instituciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>