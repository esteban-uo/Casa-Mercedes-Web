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
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $problematica['Problematica']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $problematica['Problematica']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $problematica['Problematica']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $problematica['Problematica']['id'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('New Problematica', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>