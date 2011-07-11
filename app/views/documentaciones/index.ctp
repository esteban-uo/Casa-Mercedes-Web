<div class="documentaciones index">
	<h2><?php __('Documentaciones');?></h2>
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
	foreach ($documentaciones as $documentacion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $documentacion['Documentacion']['id']; ?>&nbsp;</td>
		<td><?php echo $documentacion['Documentacion']['title']; ?>&nbsp;</td>
		<td><?php echo $documentacion['Documentacion']['created']; ?>&nbsp;</td>
		<td><?php echo $documentacion['Documentacion']['modified']; ?>&nbsp;</td>
		<td><?php echo $documentacion['Documentacion']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $documentacion['Documentacion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $documentacion['Documentacion']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $documentacion['Documentacion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentacion['Documentacion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Documentacion', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Documentos', true), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento', true), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>