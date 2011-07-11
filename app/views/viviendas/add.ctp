<div class="viviendas form">
<?php echo $this->Form->create('Vivienda');?>
	<fieldset>
		<legend><?php __('Add Vivienda'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Viviendas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>