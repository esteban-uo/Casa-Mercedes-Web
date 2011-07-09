<div class="tipoimages form">
<?php echo $this->Form->create('Tipoimage');?>
	<fieldset>
		<legend><?php __('Edit Tipoimage'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Tipoimage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipoimage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Tipoimages', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>