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
		<legend><?php __('Modificar Albergado'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('persona_id', array("label"=>"Nombre de la persona registrada"));
		echo $this->Form->input('expediente');
		echo $this->Form->input('casa_id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('embarazo_actual');
		echo $this->Form->input('cant_hijos', array("label"=>"Cantidad de hijos"));
		echo $this->Form->input('remitida_por', array("label"=>"Registrada por"));
		echo $this->Form->input('averiguacion_previa');
		echo $this->Form->input('familiograma_imagen_id', array("type"=>"text"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Guardar Cambios', true));?>
</div>
<!--
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Albergado.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Albergado.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Datos', true), array('controller' => 'datos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Dato', true), array('controller' => 'datos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Dependientes', true), array('controller' => 'dependientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Dependiente', true), array('controller' => 'dependientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Familias', true), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Familia', true), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Ingresos', true), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Ingreso', true), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Instituciones', true), array('controller' => 'instituciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Institución', true), array('controller' => 'instituciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('ver Problemáticas', true), array('controller' => 'problematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Problemática', true), array('controller' => 'problematicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Sociales', true), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Social', true), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Socio Económicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Económico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>-->