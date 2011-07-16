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
					<li>Nombre: <span class="formateotxt_strong"><?php echo $Persona['primer_nombre']; ?></span></li>
					<?php if($Persona['segundo_nombre']): ?>
					<li>Segundo Nombre: <span class="formateotxt_strong"><?php echo $Persona['segundo_nombre']; ?></span></li>
					<?php endif; ?>
					<li>Primer Apellido: <span class="formateotxt_strong"><?php echo $Persona['primer_apellido']; ?></span></li>
					<li>Segundo Apellido: <span class="formateotxt_strong"><?php echo $Persona['segundo_apellido']; ?></span></li>
				</ul>
			</div>
			<div class="posiciones_fl">
				    <?php 
						echo $this->Html->image($FotoImagen["Tipoimage"]["title"].'/'.$FotoImagen["url"], array(
							"alt" => $Persona['nombre_completo']
						)); 
					?>
			</div>
		</div>
		<div class="posiciones_cl"></div>
		<div>
			<ul>
				<li><?php echo $this->Html->link(__('Generar Reporte de Ficha de Identificación', true), array('controller'=>'reportes','action' => 'ficha_identificacion', 'id'=> $Persona['id'])); ?></li>
				<li><?php echo $this->Html->link(__('Generar Reporte de Estudio Social', true), array('controller'=>'reportes','action' => 'estudio_social', 'id'=> $Persona['id'])); ?></li>
				<li><?php echo $this->Html->link(__('Ver último Usuario editor', true), array('controller'=>'users','action' => 'view'.'/'.$Persona['modified_user_id'])); ?></li>
			</ul>
		</div>
	<?php endif; ?>
	</div>
</div>
<div class="cl"></div>
