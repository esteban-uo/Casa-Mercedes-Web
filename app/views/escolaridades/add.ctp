<div class="escolaridades form">
<?php echo $this->Form->create('Escolaridad');?>
	<fieldset>
		<legend><?php __('Add Escolaridad'); ?></legend>
	<?php
		echo $this->Form->input('albergado_id');
		echo $this->Form->input('ciclo_escolar_id');
		echo $this->Form->input('escuela');
		echo $this->Form->input('escolaridad');
		echo $this->Form->input('grado');
		echo $this->Form->input('inscrito');
		echo $this->Form->input('statusfinal');
		echo $this->Form->input('fecha_baja');
		echo $this->Form->input('motivo_baja');
		echo $this->Form->input('certificado');
		echo $this->Form->input('boleta');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Escolaridades', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciclos Escolares', true), array('controller' => 'ciclos_escolares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciclo Escolar', true), array('controller' => 'ciclos_escolares', 'action' => 'add')); ?> </li>
	</ul>
</div>