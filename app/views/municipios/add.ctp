<div class="municipios form">
<?php echo $this->Form->create('Municipio');?>
	<fieldset>
		<legend><?php __('Add Municipio'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Municipios', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>