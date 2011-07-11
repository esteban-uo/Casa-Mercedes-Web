<div class="datos form">
<?php echo $this->Form->create('Dato');?>
	<fieldset>
		<legend><?php __('Edit Dato'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('plan_social');
		echo $this->Form->input('historia_de_vida');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Dato.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Dato.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Datos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>