<div class="problematicas form">
<?php echo $this->Form->create('Problematica');?>
	<fieldset>
		<legend><?php __('Add Problematica'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('calle');
		echo $this->Form->input('abandono');
		echo $this->Form->input('situacion_socieconomica');
		echo $this->Form->input('omision_de_cuidados');
		echo $this->Form->input('violencia');
		echo $this->Form->input('abuso_sexual');
		echo $this->Form->input('otros_delitos');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Problematicas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>