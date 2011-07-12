<div class="ingresos index">
	<h2><?php __('Ingresos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha');?></th>
			<th><?php echo $this->Paginator->sort('motivo');?></th>
			<th><?php echo $this->Paginator->sort('ingreso_egreso');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($ingresos as $ingreso):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $ingreso['Ingreso']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($ingreso['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $ingreso['Albergado']['id'])); ?>
		</td>
		<td><?php echo $ingreso['Ingreso']['fecha']; ?>&nbsp;</td>
		<td><?php echo $ingreso['Ingreso']['motivo']; ?>&nbsp;</td>
		<td><?php echo $ingreso['Ingreso']['ingreso_egreso']; ?>&nbsp;</td>
		<td><?php echo $ingreso['Ingreso']['created']; ?>&nbsp;</td>
		<td><?php echo $ingreso['Ingreso']['modified']; ?>&nbsp;</td>
		<td><?php echo $ingreso['Ingreso']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $ingreso['Ingreso']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $ingreso['Ingreso']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $ingreso['Ingreso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingreso['Ingreso']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Ingreso', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>