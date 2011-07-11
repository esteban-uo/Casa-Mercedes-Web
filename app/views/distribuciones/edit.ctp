<div class="distribuciones form">
<?php echo $this->Form->create('Distribucion');?>
	<fieldset>
		<legend><?php __('Edit Distribucion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Distribucion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Distribucion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Distribuciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>