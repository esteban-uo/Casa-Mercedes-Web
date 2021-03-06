<div class="problematicas form">
<?php echo $this->Form->create('Problematica');?>
	<fieldset>
		<legend><?php __('Modificar Problematica'); ?></legend>
	<?php
		echo $this->Form->input('id');
		if(isset($this->params["named"]["albergadoId"])){
			echo $this->Form->input('albergado_id', array('value'=> $this->params["named"]["albergadoId"], 'type' => 'hidden'));
		}else{
			echo $this->Form->input('albergado_id');
		}
		echo $this->Form->input('calle');
		echo $this->Form->input('abandono');
		echo $this->Form->input('situacion_socieconomica');
		echo $this->Form->input('omision_de_cuidados');
		echo $this->Form->input('violencia');
		echo $this->Form->input('abuso_sexual');
		echo $this->Form->input('otros_delitos', array('type'=>'textbox'));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Problematica.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Problematica.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Problematicas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>