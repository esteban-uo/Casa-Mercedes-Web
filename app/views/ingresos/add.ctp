<div class="ingresos form">
<?php echo $this->Form->create('Ingreso');?>
	<fieldset>
		<legend><?php __('Add Ingreso'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('fecha');
		echo $this->Form->input('motivo');
		echo $this->Form->input('ingreso_egreso');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Ingresos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>