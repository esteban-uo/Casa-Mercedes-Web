<div class="familias form">
<?php echo $this->Form->create('Familia');?>
	<fieldset>
		<legend><?php __('Add Familia'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('ambos_padres');
		echo $this->Form->input('padre_o_madre');
		echo $this->Form->input('hermanos');
		echo $this->Form->input('hermanos_en_hogar');
		echo $this->Form->input('hermanos_con_familia');
		echo $this->Form->input('contacto_con_hermanos');
		echo $this->Form->input('otros_familiares');
		echo $this->Form->input('contacto_con_familiares');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Familias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>