<div id="contenido">
<div class="actions">
	<h2 class="subtitle">Acciones</h2>
	<ul id="act_style">
		<li><?php echo $this->Html->link(__('Albergados', true), array('controller'=>'albergados','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Casas', true), array('controller'=>'casas','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Ciclos Escolares', true), array('controller'=>'ciclo_escolars','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Construcciones', true), array('controller'=>'construcciones','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Datos', true), array('controller'=>'datos','action' => 'index')); ?></li>
		<li><?php echo $this->Html->link(__('Personas', true), array('controller'=>'personas','action' => 'index')); ?></li>
		<li>Más acciones...</li>
	</ul>
	<h2 class="subtitle">Reportes</h2>
	<ul id="rep_style">
		<li><?php echo $this->Html->link(__('Reportes', true), array('controller'=>'reportes','action' => 'index')); ?></li>
	</ul>
</div>
<div>
	<p class="parag">Algo de contenido...</p>
</div>
<div id="patrocinadores">
<h4>Gracias a:</h4>
<a href="http://www.extend.com.mx" class="extend"></a>
</div>
</div>