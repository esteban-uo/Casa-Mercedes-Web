<div class="familias form">
<?php echo $this->Form->create('Familia');?>
	<fieldset>
		<legend><?php __('Modificar Familia'); ?></legend>
	<?php
		echo $this->Form->input('id');
		if(isset($this->params["named"]["albergadoId"])){
			echo $this->Form->input('albergado_id', array('value'=> $this->params["named"]["albergadoId"], 'type' => 'hidden'));
		}else{
			echo $this->Form->input('albergado_id');
		}
		echo $this->Form->input('ambos_padres');
		echo $this->Form->input('padre_o_madre');
		echo $this->Form->input('hermanos');
		echo $this->Form->input('hermanos_en_hogar');
		echo $this->Form->input('hermanos_con_familia');
		echo $this->Form->input('contacto_con_hermanos');
		echo $this->Form->input('otros_familiares');
		echo $this->Form->input('contacto_con_familiares');
		echo $this->Form->input('observaciones');
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Actualizar Datos', true));?>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>

		<li><?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $this->Form->value('Familia.id')), null, sprintf(__('Are you sure you want to delete # %s?', true), $this->Form->value('Familia.id'))); ?></li>
		<li><?php echo $this->Html->link(__('Ver Familias', true), array('action' => 'index'));?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>