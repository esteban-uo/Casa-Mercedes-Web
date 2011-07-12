<div class="tenencias index">
	<h2><?php __('Tenencias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($tenencias as $tenencia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $tenencia['Tenencia']['id']; ?>&nbsp;</td>
		<td><?php echo $tenencia['Tenencia']['title']; ?>&nbsp;</td>
		<td><?php echo $tenencia['Tenencia']['created']; ?>&nbsp;</td>
		<td><?php echo $tenencia['Tenencia']['modified']; ?>&nbsp;</td>
		<td><?php echo $tenencia['Tenencia']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $tenencia['Tenencia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $tenencia['Tenencia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $tenencia['Tenencia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tenencia['Tenencia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Tenencia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>