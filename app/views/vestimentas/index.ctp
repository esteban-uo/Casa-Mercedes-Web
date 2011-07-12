<div class="vestimentas index">
	<h2><?php __('Vestimentas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('talla');?></th>
			<th><?php echo $this->Paginator->sort('calzado');?></th>
			<th><?php echo $this->Paginator->sort('brazier');?></th>
			<th><?php echo $this->Paginator->sort('pantaleta');?></th>
			<th><?php echo $this->Paginator->sort('blusa');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($vestimentas as $vestimenta):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $vestimenta['Vestimenta']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($vestimenta['Persona']['nombre_completo'], array('controller' => 'personas', 'action' => 'view', $vestimenta['Persona']['id'])); ?>
		</td>
		<td><?php echo $vestimenta['Vestimenta']['talla']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['calzado']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['brazier']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['pantaleta']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['blusa']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['created']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['modified']; ?>&nbsp;</td>
		<td><?php echo $vestimenta['Vestimenta']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $vestimenta['Vestimenta']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $vestimenta['Vestimenta']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $vestimenta['Vestimenta']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vestimenta['Vestimenta']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Vestimenta', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
	</ul>
</div>