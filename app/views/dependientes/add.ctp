<div class="dependientes form">
<?php echo $this->Form->create('Dependiente');?>
	<fieldset>
		<legend><?php __('Add Dependiente'); ?></legend>
	<?php
		echo $this->Form->input('persona_id');
		if(isset($this->params["named"]["albergadoId"])){
			echo $this->Form->input('albergado_id', array('value'=> $this->params["named"]["albergadoId"], 'type' => 'hidden'));
		}else{
			echo $this->Form->input('albergado_id');
		}
		echo $this->Form->input('expediente');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Dependientes', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>