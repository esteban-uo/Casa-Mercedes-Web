<div class="datos form">
<?php echo $this->Form->create('Dato');?>
	<fieldset>
		<legend><?php __('Agregar Dato'); ?></legend>
	<?php
		if(isset($this->params["named"]["albergadoId"])){
			echo $this->Form->input('albergado_id', array('value'=> $this->params["named"]["albergadoId"], 'type' => 'hidden'));
		}else{
			echo $this->Form->input('albergado_id');
		}
		echo $this->Form->input('plan_social');
		echo $this->Form->input('historia_de_vida');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Datos', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>