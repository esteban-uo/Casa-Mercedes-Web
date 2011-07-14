<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Modificar Usuarios'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('casa_id');
		echo $this->Form->input('username', array("label"=>"usuario"));
		echo $this->Form->input('password', array("label"=>"Contraseña"));
		echo $this->Form->input('fecha_alta');
		echo $this->Form->input('fecha_baja');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('User.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('User.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Usuarios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
	</ul>
</div>