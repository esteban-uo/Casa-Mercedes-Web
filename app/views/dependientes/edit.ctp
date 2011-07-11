<div class="dependientes form">
<?php echo $this->Form->create('Dependiente');?>
	<fieldset>
		<legend><?php __('Edit Dependiente'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('expediente');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Dependiente.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Dependiente.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Dependientes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>