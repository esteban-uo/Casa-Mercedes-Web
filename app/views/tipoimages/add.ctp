<div class="tipoimages form">
<?php echo $this->Form->create('Tipoimage');?>
	<fieldset>
		<legend><?php __('Add Tipoimage'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('modified_user_id', array("type"=>"text"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Tipoimages', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Image', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>