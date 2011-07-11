<div class="dependientes index">
	<h2><?php __('Dependientes');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('expediente');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($dependientes as $dependiente):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $dependiente['Dependiente']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($dependiente['Persona']['nombre_completo'], array('controller' => 'personas', 'action' => 'view', $dependiente['Persona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($dependiente['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $dependiente['Albergado']['id'])); ?>
		</td>
		<td><?php echo $dependiente['Dependiente']['expediente']; ?>&nbsp;</td>
		<td><?php echo $dependiente['Dependiente']['created']; ?>&nbsp;</td>
		<td><?php echo $dependiente['Dependiente']['modified']; ?>&nbsp;</td>
		<td><?php echo $dependiente['Dependiente']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $dependiente['Dependiente']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $dependiente['Dependiente']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $dependiente['Dependiente']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dependiente['Dependiente']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Dependiente', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>