<div class="grupos form">
<?php echo $this->Form->create('Grupo');?>
	<fieldset>
		<legend><?php __('Agregar Grupo'); ?></legend>
	<?php
		echo $this->Form->input('title', array("label"=>"Descripción"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar Grupo', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Grupos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Usuarios', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Usuarios', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>