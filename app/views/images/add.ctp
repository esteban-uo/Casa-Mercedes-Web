<div class="images form">
<?php echo $this->Form->create('Image');?>
	<fieldset>
		<legend><?php __('Agregar Imagen'); ?></legend>
	<?php
		echo $this->Form->input('url', array("label"=>"Dirección"));
		echo $this->Form->input('tipoimage_id', array("label"=>"Tipo de Imagen"));
		echo $this->Form->input('modified_user_id', array("type"=>"text"));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Imagenes', true), array('action' => 'index'));?></li>
	</ul>
</div>