<div class="tipoimages index">
	<h2><?php __('Tipoimages');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Descripción');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tipoimages as $tipoimage):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tipoimage['Tipoimage']['id']; ?>&nbsp;</td>
		<td><?php echo $tipoimage['Tipoimage']['title']; ?>&nbsp;</td>
		<td><?php echo $tipoimage['Tipoimage']['created']; ?>&nbsp;</td>
		<td><?php echo $tipoimage['Tipoimage']['modified']; ?>&nbsp;</td>
		<td><?php echo $tipoimage['Tipoimage']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $tipoimage['Tipoimage']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $tipoimage['Tipoimage']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $tipoimage['Tipoimage']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tipoimage['Tipoimage']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Tipo Imagen', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Imagenes', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Imagenes', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
	</ul>
</div>