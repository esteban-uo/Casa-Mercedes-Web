<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
		<legend><?php __('Modifiar Imagen'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('url', array("label"=>"Dirección"));
		echo $this->Form->input('tipoimage_id', array("label"=>"Tipo de Imagen"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Image.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Image.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Imagenes', true), array('action' => 'index'));?></li>
	</ul>
</div>