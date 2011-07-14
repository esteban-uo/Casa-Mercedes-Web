<style>
.posiciones_fl{
	float:left;
}
.posiciones_cl{
	clear:left;
}
.formateotxt_strong{
	font-weight:bold;
}
</style>
<div class="actions posiciones_fl">
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
<div class="posiciones_fl">
	<p>Contenido para el panel de control de administración</p>
	<?php
	echo $this->Form->create(array('action' => 'acp'));
	echo $this->Form->input('Persona.search', array("label"=>"Albergado a Buscar"));
    echo $this->Form->end('Buscar');
	?>
	<div>
	<?php if($busqueda): ?>
		<div>
			<div class="posiciones_fl">
				<ul>
					<li>Nombre: <span class="formateotxt_strong"><?php echo $primer_nombre; ?></span></li>
					<?php if($segundo_nombre): ?>
					<li>Segundo Nombre: <span class="formateotxt_strong"><?php echo $segundo_nombre; ?></span></li>
					<?php endif; ?>
					<li>Primer Apellido: <span class="formateotxt_strong"><?php echo $primer_apellido; ?></span></li>
					<li>Segundo Apellido: <span class="formateotxt_strong"><?php echo $segundo_apellido; ?></span></li>
					<li>Ultimo usuario en modificar: <span class="formateotxt_strong"><?php echo $usuario_ultimo_modificador; ?></span></li>
				</ul>
			</div>
			<div class="posiciones_fl">
				<img src="" title="" />
			</div>
		</div>
		<div class="posiciones_cl"></div>
		<div>
			<?php echo $this->Html->link(__('Generar Reporte de Ficha de Identificación', true), array('controller'=>'reportes','action' => 'ficha_identificacion', 'id'=> $albergado_id)); ?>
		</div>
	<?php endif; ?>
	</div>
</div>
<div class="cl"></div>
