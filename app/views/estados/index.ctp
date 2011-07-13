<div class="estados index">
	<h2><?php __('Estados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('pais_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
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
		<td>
			<?php echo $this->Html->link($estado['Pais']['title'], array('controller' => 'paises', 'action' => 'view', $estado['Pais']['id'])); ?>
		</td>
		<td><?php echo $estado['Estado']['created']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['modified']; ?>&nbsp;</td>
		<td><?php echo $estado['Estado']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $estado['Estado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $estado['Estado']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $estado['Estado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estado['Estado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estado', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>