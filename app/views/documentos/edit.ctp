<div class="documentos form">
<?php echo $this->Form->create('Documento');?>
	<fieldset>
		<legend><?php __('Edit Documento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('documentacion_id');
		echo $this->Form->input('numero_documento');
		echo $this->Form->input('tramitada_por_cm');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Documento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Documento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Documentos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentaciones', true), array('controller' => 'documentaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documentacion', true), array('controller' => 'documentaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>