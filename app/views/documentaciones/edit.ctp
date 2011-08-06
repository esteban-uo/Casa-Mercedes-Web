<div class="documentaciones form">
<?php echo $this->Form->create('Documentacion');?>
	<fieldset>
		<legend><?php __('Edit Documentacion'); ?></legend>
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Documentacion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Documentacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Documentaciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Documentos', true), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento', true), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>