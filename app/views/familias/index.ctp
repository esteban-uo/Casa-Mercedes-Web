<div class="familias index">
	<h2><?php __('Familias');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('ambos_padres');?></th>
			<th><?php echo $this->Paginator->sort('padre_o_madre');?></th>
			<th><?php echo $this->Paginator->sort('hermanos');?></th>
			<th><?php echo $this->Paginator->sort('hermanos_en_hogar');?></th>
			<th><?php echo $this->Paginator->sort('hermanos_con_familia');?></th>
			<th><?php echo $this->Paginator->sort('contacto_con_hermanos');?></th>
			<th><?php echo $this->Paginator->sort('otros_familiares');?></th>
			<th><?php echo $this->Paginator->sort('contacto_con_familiares');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($familias as $familia):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $familia['Familia']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($familia['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $familia['Albergado']['id'])); ?>
		</td>
		<td><?php echo $familia['Familia']['ambos_padres']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['padre_o_madre']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['hermanos']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['hermanos_en_hogar']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['hermanos_con_familia']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['contacto_con_hermanos']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['otros_familiares']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['contacto_con_familiares']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['observaciones']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['created']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['modified']; ?>&nbsp;</td>
		<td><?php echo $familia['Familia']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $familia['Familia']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $familia['Familia']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $familia['Familia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $familia['Familia']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Familia', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>