<div class="documentaciones form">
<?php echo $this->Form->create('Documentacion');?>
	<fieldset>
		<legend><?php __('Modificar Documentacion'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array("label"=>"Descripción"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Documentacion', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Documentacion.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Documentacion.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Documentaciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Documentos', true), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Documento', true), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>