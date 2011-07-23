<div class="documentaciones form">
<?php echo $this->Form->create('Documentacion');?>
	<fieldset>
		<legend><?php __('Agregar Documentacion'); ?></legend>
	<?php
		echo $this->Form->input('title');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar Documentacion', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Documentaciones', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Documentos', true), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Documento', true), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>