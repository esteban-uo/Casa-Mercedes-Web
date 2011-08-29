<div class="sociales form">
<?php echo $this->Form->create('Social');?>
	<fieldset>
		<legend><?php __('Modificar Social'); ?></legend>
	<?php
		echo $this->Form->input('id');
		if(isset($this->params["named"]["albergadoId"])){
			echo $this->Form->input('albergado_id', array('value'=> $this->params["named"]["albergadoId"], 'type' => 'hidden'));
		}else{
			echo $this->Form->input('albergado_id');
		}
		echo $this->Form->input('comunicacion', array("label"=>"Comunicación"));
		echo $this->Form->input('comunicacion', array('label'=>'Comunicación'));
		echo $this->Form->input('roles');
		echo $this->Form->input('normas_y_valores');
		echo $this->Form->input('manejo_autoridad');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Social.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Social.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Sociales', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>