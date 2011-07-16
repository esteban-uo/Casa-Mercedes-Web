<div class="instituciones form">
<?php echo $this->Form->create('Institucion');?>
	<fieldset>
		<legend><?php __('Agregar Institución'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('institucion', array("label"=>"Institución"));
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('fecha_egreso');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Instituciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>