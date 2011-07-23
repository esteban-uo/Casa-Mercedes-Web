<div class="albergados form">
<?php 

if (isset($closeModalbox) && $closeModalbox) echo "<div id='closeModalbox'></div>";

if( $ajax->isAjax()){
    echo $ajax->form('edit', 'post', array(
        'model'    => 'Albergados',
        'url'      => array( 'controller' => 'albergados', 'action' => 'edit'),
        'update'   => 'MB_content',
        'complete' => 'closeModalbox();'
        ));
}else{
    echo $form->create('Albergado');
}
?>
	<fieldset>
		<legend><?php __('Edit Albergado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id');
		echo $this->Form->input('numero_embarazos');
		echo $this->Form->input('expediente');
		echo $this->Form->input('casa_id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('embarazo_actual');
		echo $this->Form->input('cant_hijos');
		echo $this->Form->input('remitida_por');
		echo $this->Form->input('averiguacion_previa');
		echo $this->Form->input('familiograma_imagen_id');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<!--
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Albergado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Albergado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto Imagen', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos', true), array('controller' => 'datos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dato', true), array('controller' => 'datos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependientes', true), array('controller' => 'dependientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependiente', true), array('controller' => 'dependientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias', true), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia', true), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos', true), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso', true), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instituciones', true), array('controller' => 'instituciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institucion', true), array('controller' => 'instituciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problematicas', true), array('controller' => 'problematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problematica', true), array('controller' => 'problematicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociales', true), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Social', true), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->
