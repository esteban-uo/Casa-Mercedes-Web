<div class="ingresos form">
<?php echo $this->Form->create('Ingreso');?>
	<fieldset>
		<legend><?php __('Agregar Ingreso'); ?></legend>
	<?php
	 if(isset($pasadoPorParametro)){
		echo $this->Form->input('albergado_id', array('value'=>$id, 'type' => 'hidden'));
	}else{
		echo $this->Form->input('albergado_id');
	}
		echo $this->Form->input('fecha');
		echo $this->Form->input('motivo');
		echo $this->Form->input('ingreso_egreso');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar Ingreso', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Ingresos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>