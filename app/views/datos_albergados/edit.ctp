<div class="datosAlbergados form">
<?php echo $this->Form->create('DatosAlbergado');?>
	<fieldset>
		<legend><?php __('Edit Datos Albergado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('consumo_sustancias');
		echo $this->Form->input('perforaciones');
		echo $this->Form->input('tatuajes');
		echo $this->Form->input('delitos');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('DatosAlbergado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('DatosAlbergado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Datos Albergados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>