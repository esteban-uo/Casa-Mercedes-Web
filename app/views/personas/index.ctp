<div class="personas index">
	<h2><?php __('Personas Registradas');?></h2>
	
	<ul class="acciones_orden">
		<li>Ordenar por:</li>
			<ul>
				<li><?php echo $this->Paginator->sort('Fecha de creacion', 'created');?></li>
				<li><?php echo $this->Paginator->sort('Ultima edicion','modified');?></li>
			</ul>
	</ul>
	
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('primer_nombre');?></th>
			<th><?php echo $this->Paginator->sort('segundo_nombre');?></th>
			<th><?php echo $this->Paginator->sort('primer_apellido');?></th>
			<th><?php echo $this->Paginator->sort('segundo_apellido');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personas as $persona):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $persona['Persona']['primer_nombre']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['segundo_nombre']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['primer_apellido']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['segundo_apellido']; ?>&nbsp;</td>
		<td class="actions">
			<?php if(!isset($persona['Albergado']['id'])) echo $this->Html->link(__('Crear Albergado', true), array('controller'=>'albergados','action' => 'add', "personaId"=>$persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $persona['Persona']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $persona['Persona']['id'])); ?>
		</td>
	</tr>
<?php endforeach; ?>
	</table>
	<p>
	<?php
	echo $this->Paginator->counter(array(
	'format' => __('Page %page% of %pages%, showing %current% records out of %count% total, starting on record %start%, ending on %end%', true)
	));
	?>	</p>

	<div class="paging">
		<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Registrar Nueva Persona', true), array('action' => 'add')); ?></li>
	</ul>
</div>