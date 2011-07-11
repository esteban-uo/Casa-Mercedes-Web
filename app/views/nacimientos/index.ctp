<div class="nacimientos index">
	<h2><?php __('Nacimientos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('fecha_nacimiento');?></th>
			<th><?php echo $this->Paginator->sort('pais_id');?></th>
			<th><?php echo $this->Paginator->sort('estado_id');?></th>
			<th><?php echo $this->Paginator->sort('municipio_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($nacimientos as $nacimiento):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $nacimiento['Nacimiento']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nacimiento['Persona']['nombre_completo'], array('controller' => 'personas', 'action' => 'view', $nacimiento['Persona']['id'])); ?>
		</td>
		<td><?php echo $nacimiento['Nacimiento']['fecha_nacimiento']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($nacimiento['Pais']['title'], array('controller' => 'paises', 'action' => 'view', $nacimiento['Pais']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nacimiento['Estado']['title'], array('controller' => 'estados', 'action' => 'view', $nacimiento['Estado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($nacimiento['Municipio']['title'], array('controller' => 'municipios', 'action' => 'view', $nacimiento['Municipio']['id'])); ?>
		</td>
		<td><?php echo $nacimiento['Nacimiento']['created']; ?>&nbsp;</td>
		<td><?php echo $nacimiento['Nacimiento']['modified']; ?>&nbsp;</td>
		<td><?php echo $nacimiento['Nacimiento']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $nacimiento['Nacimiento']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $nacimiento['Nacimiento']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $nacimiento['Nacimiento']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nacimiento['Nacimiento']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Nacimiento', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Paises', true), array('controller' => 'paises', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Pais', true), array('controller' => 'paises', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
	</ul>
</div>