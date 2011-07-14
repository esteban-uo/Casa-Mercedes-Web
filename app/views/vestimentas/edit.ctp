<div class="vestimentas form">
<?php echo $this->Form->create('Vestimenta');?>
	<fieldset>
		<legend><?php __('Edit Vestimenta'); ?></legend>
	<?php
		echo $this->Form->input('id');
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

		<li><?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $this->Form->value('Vestimenta.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Vestimenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('List Vestimentas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>