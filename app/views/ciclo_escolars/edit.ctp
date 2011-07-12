<div class="cicloEscolars form">
<?php echo $this->Form->create('CicloEscolar');?>
	<fieldset>
		<legend><?php __('Edit Ciclo Escolar'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('CicloEscolar.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('CicloEscolar.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Ciclo Escolars', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>