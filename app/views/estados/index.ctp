<div class="estados index">
	<h2><?php __('Estados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('número');?></th>
			<th><?php echo $this->Paginator->sort('descripción');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($estados as $estado):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $estado['Estado']['id']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['title']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['created']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['modified']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $estado['Estado']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $estado['Estado']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Estado', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>