<div class="socioEconomicos form">
<?php echo $this->Form->create('SocioEconomico');?>
	<fieldset>
		<legend><?php __('Modificar Socio Económico'); ?></legend>
	<?php
		echo $this->Form->input('id');
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('poblacion_indigena', array("label"=>"Población Indigena"));
		echo $this->Form->input('ha_trabajado');
		echo $this->Form->input('tiempo_de_trabajo');
		echo $this->Form->input('ultimo_trabajo', array("label"=>"Último Trabajo"));
		echo $this->Form->input('tiempo');
		echo $this->Form->input('sueldo');
		echo $this->Form->input('nivel_economico', array("label"=>"Nivel Económico"));
		echo $this->Form->input('zona_id');
		echo $this->Form->input('vivienda_id');
		echo $this->Form->input('construccion_id', array("label"=>"Construcción"));
		echo $this->Form->input('tenencia_id');
		echo $this->Form->input('distribucion_id', array("label"=>"Distribución"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('SocioEconomico.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('SocioEconomico.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Socio Economicos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Zonas', true), array('controller' => 'zonas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Zona', true), array('controller' => 'zonas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Viviendas', true), array('controller' => 'viviendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Vivienda', true), array('controller' => 'viviendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Construcción', true), array('controller' => 'construcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Tenencias', true), array('controller' => 'tenencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Tenencia', true), array('controller' => 'tenencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Distribuciones', true), array('controller' => 'distribuciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Distribución', true), array('controller' => 'distribuciones', 'action' => 'add')); ?> </li>
	</ul>
</div>