<div class="socioEconomicos form">
<?php echo $this->Form->create('SocioEconomico');?>
	<fieldset>
		<legend><?php __('Add Socio Economico'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('poblacion_indigena');
		echo $this->Form->input('ha_trabajado');
		echo $this->Form->input('tiempo_de_trabajo');
		echo $this->Form->input('ultimo_trabajo');
		echo $this->Form->input('tiempo');
		echo $this->Form->input('sueldo');
		echo $this->Form->input('nivel_economico');
		echo $this->Form->input('zona_id');
		echo $this->Form->input('vivienda_id');
		echo $this->Form->input('construccion_id');
		echo $this->Form->input('tenencia_id');
		echo $this->Form->input('distribucion_id');
		echo $this->Form->input('modified_user_id');
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zonas', true), array('controller' => 'zonas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zona', true), array('controller' => 'zonas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Viviendas', true), array('controller' => 'viviendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vivienda', true), array('controller' => 'viviendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Construcciones', true), array('controller' => 'construcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Construccion', true), array('controller' => 'construcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenencias', true), array('controller' => 'tenencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenencia', true), array('controller' => 'tenencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Distribuciones', true), array('controller' => 'distribuciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distribucion', true), array('controller' => 'distribuciones', 'action' => 'add')); ?> </li>
	</ul>
</div>