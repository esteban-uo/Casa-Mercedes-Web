<div class="vestimentas form">
<?php echo $this->Form->create('Vestimenta');?>
	<fieldset>
		<legend><?php __('Modificar Vestimenta'); ?></legend>
	<?php
		echo $this->Form->input('id');
		if(isset($this->params["named"]["personaId"])){
			echo $this->Form->input('persona_id', array('value'=> $this->params["named"]["personaId"], 'type' => 'hidden'));
		}else{
			echo $this->Form->input('persona_id');
		}
		echo $this->Form->input('talla');
		echo $this->Form->input('calzado');
		echo $this->Form->input('brazier');
		echo $this->Form->input('pantaleta');
		echo $this->Form->input('blusa');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Vestimenta.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Vestimenta.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Vestimentas', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>