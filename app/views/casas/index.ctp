<div class="casas index">
	<h2><?php __('Casas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('Paises_id');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('municipio_id');?></th>
			<th><?php echo $this->Paginator->sort('direccion');?></th>
			<th><?php echo $this->Paginator->sort('telefono');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($casas as $casa):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $casa['Casa']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($casa['Paises']['title'], array('controller' => 'Paiseses', 'action' => 'view', $casa['Paises']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($casa['Estado']['title'], array('controller' => 'estados', 'action' => 'view', $casa['Estado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($casa['Municipio']['title'], array('controller' => 'municipios', 'action' => 'view', $casa['Municipio']['id'])); ?>
		</td>
		<td><?php echo $casa['Casa']['direccion']; ?>&nbsp;</td>
		<td><?php echo $casa['Casa']['telefono']; ?>&nbsp;</td>
		<td><?php echo $casa['Casa']['created']; ?>&nbsp;</td>
		<td><?php echo $casa['Casa']['modified']; ?>&nbsp;</td>
		<td><?php echo $casa['Casa']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $casa['Casa']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $casa['Casa']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $casa['Casa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $casa['Casa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Casa', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Paiseses', true), array('controller' => 'Paiseses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Paises', true), array('controller' => 'Paiseses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Users', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New User', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>