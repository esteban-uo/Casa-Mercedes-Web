<div class="instituciones index">
	<h2><?php __('Instituciones');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('institucion');?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso');?></th>
			<th><?php echo $this->Paginator->sort('fecha_egreso');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($instituciones as $institucion):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $institucion['Institucion']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($institucion['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $institucion['Albergado']['id'])); ?>
		</td>
		<td><?php echo $institucion['Institucion']['institucion']; ?>&nbsp;</td>
		<td><?php echo $institucion['Institucion']['fecha_ingreso']; ?>&nbsp;</td>
		<td><?php echo $institucion['Institucion']['fecha_egreso']; ?>&nbsp;</td>
		<td><?php echo $institucion['Institucion']['created']; ?>&nbsp;</td>
		<td><?php echo $institucion['Institucion']['modified']; ?>&nbsp;</td>
		<td><?php echo $institucion['Institucion']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $institucion['Institucion']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $institucion['Institucion']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $institucion['Institucion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $institucion['Institucion']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Institucion', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>