<div class="tipoimages form">
<?php echo $this->Form->create('Tipoimage');?>
	<fieldset>
		<legend><?php __('Modificar Tipo de Imagen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('title', array("label"=>"Descripción"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Tipoimage.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Tipoimage.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Tipo de imagenes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Imagenes', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Imagen', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>