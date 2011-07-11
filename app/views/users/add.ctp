<div class="users form">
<?php echo $this->Form->create('User');?>
	<fieldset>
		<legend><?php __('Add User'); ?></legend>
	<?php
		echo $this->Form->input('grupo_id');
		echo $this->Form->input('casa_id');
		echo $this->Form->input('username');
		echo $this->Form->input('password');
		echo $this->Form->input('fecha_alta');
		echo $this->Form->input('fecha_baja');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Users', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
	</ul>
</div>