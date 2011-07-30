<div class="problematicas form">
<?php echo $this->Form->create('Problematica');?>
	<fieldset>
		<legend><?php __('Agregar Problematica'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('calle');
		echo $this->Form->input('abandono');
		echo $this->Form->input('situacion_socieconomica');
		echo $this->Form->input('omision_de_cuidados');
		echo $this->Form->input('violencia');
		echo $this->Form->input('abuso_sexual');
		echo $this->Form->input('otros_delitos', array('type'=>'textbox'));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar Problematica', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Problematicas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>