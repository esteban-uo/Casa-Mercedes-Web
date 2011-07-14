<div class="viviendas index">
	<h2><?php __('Viviendas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Descripción');?></th>
			<th><?php echo $this->Paginator->sort('creado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($viviendas as $vivienda):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $vivienda['Vivienda']['id']; ?>&nbsp;</td>
		<td><?php echo $vivienda['Vivienda']['title']; ?>&nbsp;</td>
		<td><?php echo $vivienda['Vivienda']['created']; ?>&nbsp;</td>
		<td><?php echo $vivienda['Vivienda']['modified']; ?>&nbsp;</td>
		<td><?php echo $vivienda['Vivienda']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $vivienda['Vivienda']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $vivienda['Vivienda']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $vivienda['Vivienda']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vivienda['Vivienda']['id'])); ?>
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
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Vivienda', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>