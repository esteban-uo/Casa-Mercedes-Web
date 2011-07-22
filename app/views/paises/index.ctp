<div class="paises index">
	<h2><?php __('Paises');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Pais');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Accciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($paises as $pais):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $pais['Pais']['id']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['title']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['created']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['modified']; ?>&nbsp;</td>
		<td><?php echo $pais['Pais']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $pais['Pais']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $pais['Pais']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $pais['Pais']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $pais['Pais']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Pais', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>