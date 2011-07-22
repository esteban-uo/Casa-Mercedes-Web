<div class="documentos form">
<?php echo $this->Form->create('Documento');?>
	<fieldset>
		<legend><?php __('Modificar Documento'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('documentacion_id');
		echo $this->Form->input('numero_documento');
		echo $this->Form->input('tramitada_por_cm');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Documento', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Documento.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Documento.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Documentos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Documentaciones', true), array('controller' => 'documentaciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Documentación', true), array('controller' => 'documentaciones', 'action' => 'add')); ?> </li>
	</ul>
</div>