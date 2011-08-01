<div class="albergados index">
	<h2><?php __('Albergados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('numero_embarazos');?></th>
			<th><?php echo $this->Paginator->sort('expediente');?></th>
			<th><?php echo $this->Paginator->sort('casa_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso');?></th>
			<th><?php echo $this->Paginator->sort('embarazo_actual');?></th>
			<th><?php echo $this->Paginator->sort('cant_hijos');?></th>
			<th><?php echo $this->Paginator->sort('remitida_por');?></th>
			<th><?php echo $this->Paginator->sort('averiguacion_previa');?></th>
			<th><?php echo $this->Paginator->sort('familiograma_imagen_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($albergados as $albergado):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $albergado['Albergado']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($albergado['Persona']['primer_nombre'], array('controller' => 'personas', 'action' => 'view', $albergado['Persona']['id'])); ?>
		</td>
		<td><?php echo $albergado['Albergado']['numero_embarazos']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['expediente']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($albergado['Casa']['direccion'], array('controller' => 'casas', 'action' => 'view', $albergado['Casa']['id'])); ?>
		</td>
		<td><?php echo $albergado['Albergado']['fecha_ingreso']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['embarazo_actual']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['cant_hijos']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['remitida_por']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['averiguacion_previa']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($albergado['FotoImagen']['id'], array('controller' => 'images', 'action' => 'view', $albergado['FotoImagen']['id'])); ?>
		</td>
		<td><?php echo $albergado['Albergado']['created']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['modified']; ?>&nbsp;</td>
		<td><?php echo $albergado['Albergado']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">

			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $albergado['Albergado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $albergado['Albergado']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $albergado['Albergado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $albergado['Albergado']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< ' . __('previous', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('next', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions_a">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Datos', true), array('controller' => 'datos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Dato', true), array('controller' => 'datos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Dependientes', true), array('controller' => 'dependientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Dependiente', true), array('controller' => 'dependientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Familias', true), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Familia', true), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Ingresos', true), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Ingreso', true), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Instituciones', true), array('controller' => 'instituciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Institucion', true), array('controller' => 'instituciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Problemáticas', true), array('controller' => 'problematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Problemática', true), array('controller' => 'problematicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Sociales', true), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Social', true), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Socio Económicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Económico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>