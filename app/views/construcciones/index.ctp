<div class="construcciones index">
	<h2><?php __('Construcciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Descripcion');?></th>
			<th><?php echo $this->Paginator->sort('Registrada');?></th>
			<th><?php echo $this->Paginator->sort('Modificada');?></th>
			<th><?php echo $this->Paginator->sort('Modificada Por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($construcciones as $construccion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $construccion['Construccion']['id']; ?>&nbsp;</td>
		<td><?php echo $construccion['Construccion']['title']; ?>&nbsp;</td>
		<td><?php echo $construccion['Construccion']['created']; ?>&nbsp;</td>
		<td><?php echo $construccion['Construccion']['modified']; ?>&nbsp;</td>
		<td><?php echo $construccion['Construccion']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $construccion['Construccion']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $construccion['Construccion']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $construccion['Construccion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $construccion['Construccion']['id'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Construccion', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>