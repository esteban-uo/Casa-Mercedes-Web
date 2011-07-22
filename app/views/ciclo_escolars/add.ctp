<div class="cicloEscolars form">
<?php echo $this->Form->create('CicloEscolar');?>
	<fieldset>
		<legend><?php __('Registrar Ciclo Escolar'); ?></legend>
	<?php
		echo $this->Form->input('Descripcion');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Registrar', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Ver Ciclo Escolar', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>