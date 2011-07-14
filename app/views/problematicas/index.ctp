<div class="problematicas index">
	<h2><?php __('Problematicas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('calle');?></th>
			<th><?php echo $this->Paginator->sort('abandono');?></th>
			<th><?php echo $this->Paginator->sort('situacion_socieconomica');?></th>
			<th><?php echo $this->Paginator->sort('omision_de_cuidados');?></th>
			<th><?php echo $this->Paginator->sort('violencia');?></th>
			<th><?php echo $this->Paginator->sort('abuso_sexual');?></th>
			<th><?php echo $this->Paginator->sort('otros_delitos');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($problematicas as $problematica):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $problematica['Problematica']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($problematica['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $problematica['Albergado']['id'])); ?>
		</td>
		<td><?php echo $problematica['Problematica']['calle']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['abandono']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['situacion_socieconomica']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['omision_de_cuidados']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['violencia']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['abuso_sexual']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['otros_delitos']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['created']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['modified']; ?>&nbsp;</td>
		<td><?php echo $problematica['Problematica']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $problematica['Problematica']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $problematica['Problematica']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $problematica['Problematica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $problematica['Problematica']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Problematica', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>