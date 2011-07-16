<div class="images index">
	<h2><?php __('Images');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('url');?></th>
			<th><?php echo $this->Paginator->sort('tipo_image_id');?></th>
			<th><?php echo $this->Paginator->sort('creado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Action');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($images as $image):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $image['Image']['id']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['url']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['tipoimage_id']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['created']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['modified']; ?>&nbsp;</td>
		<td><?php echo $image['Image']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $image['Image']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $image['Image']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $image['Image']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Imagen', true), array('action' => 'add')); ?></li>
	</ul>
</div>