<div class="vestimentas form">
<?php echo $this->Form->create('Vestimenta');?>
	<fieldset>
		<legend><?php __('Add Vestimenta'); ?></legend>
	<?php
		echo $this->Form->input('persona_id');
		echo $this->Form->input('talla');
		echo $this->Form->input('calzado');
		echo $this->Form->input('brazier');
		echo $this->Form->input('pantaleta');
		echo $this->Form->input('blusa');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('List Vestimentas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>