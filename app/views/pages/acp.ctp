<style>
.fl{
	float:left;
}
cl{
	clear:left;
}
</style>
<div class="actions fl">
	<h2>Acciones</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Albergados', true), array('controller'=>'albergados','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Casas', true), array('controller'=>'casas','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Ciclos Escolares', true), array('controller'=>'ciclo_escolars','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Construcciones', true), array('controller'=>'construcciones','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Datos', true), array('controller'=>'datos','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Personas', true), array('controller'=>'personas','action' => 'index')); ?></li>
		<li>Más acciones...</li>
	</ul>
	<h2>Reportes</h2>
	<ul>
		<li><?php echo $this->Html->link(__('Reportes', true), array('controller'=>'reportes','action' => 'index')); ?></li>
	</ul>
</div>
<div class="fl">
	<p>Contenido para el panel de control de administración</p>
	<?php
	echo $this->Form->create(array('action' => 'acp'));
	echo $this->Form->input('persona', array("label"=>"Albergado a Buscar"));
    echo $this->Form->end('Buscar');
	?>
</div>
<div class="cl"></div>
