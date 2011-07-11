<div class="datos index">
	<h2><?php __('Datos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('plan_social');?></th>
			<th><?php echo $this->Paginator->sort('historia_de_vida');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($datos as $dato):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $dato['Dato']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dato['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $dato['Albergado']['id'])); ?>
		</td>
		<td><?php echo $dato['Dato']['plan_social']; ?>&nbsp;</td>
		<td><?php echo $dato['Dato']['historia_de_vida']; ?>&nbsp;</td>
		<td><?php echo $dato['Dato']['created']; ?>&nbsp;</td>
		<td><?php echo $dato['Dato']['modified']; ?>&nbsp;</td>
		<td><?php echo $dato['Dato']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $dato['Dato']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $dato['Dato']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dato['Dato']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dato['Dato']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dato', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>