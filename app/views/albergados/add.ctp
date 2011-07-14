<div class="albergados form">
<?php echo $this->Form->create('Albergado');?>
	<fieldset>
		<legend><?php __('Agregar Albergado'); ?></legend>
	<?php
		echo $this->Form->input('persona_id', array("label"=>"Nombre de la persona registrada"));
		echo $this->Form->input('expediente');
		echo $this->Form->input('casa_id');
		echo $this->Form->input('fecha_ingreso');
		echo $this->Form->input('embarazo_actual');
		echo $this->Form->input('cant_hijos', array("label"=>"Cantidad de hijos"));
		echo $this->Form->input('remitida_por', array("label"=>"Registrada por"));
		echo $this->Form->input('averiguacion_previa', array("label"=>"Averiguación previa"));
		echo $this->Form->input('familiograma_imagen_id', array("type"=>"text"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Personas Registradas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas Registradas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
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
		<li><?php echo $this->Html->link(__('Agregar Institucion', true), array('controller' => 'instituciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Problematicas', true), array('controller' => 'problematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Problematica', true), array('controller' => 'problematicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Sociales', true), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Social', true), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>