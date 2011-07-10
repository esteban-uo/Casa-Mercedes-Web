<div class="personas index">
	<h2><?php __('Personas');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('primer_nombre');?></th>
			<th><?php echo $this->Paginator->sort('segundo_nombre');?></th>
			<th><?php echo $this->Paginator->sort('primer_apellido');?></th>
			<th><?php echo $this->Paginator->sort('segundo_apellido');?></th>
			<th><?php echo $this->Paginator->sort('sexo');?></th>
			<th><?php echo $this->Paginator->sort('status');?></th>
			<th><?php echo $this->Paginator->sort('fecha_ingreso');?></th>
			<th><?php echo $this->Paginator->sort('foto_imagen_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($personas as $persona):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $persona['Persona']['id']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['primer_nombre']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['segundo_nombre']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['primer_apellido']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['segundo_apellido']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['sexo']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['status']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['fecha_ingreso']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['foto_imagen_id']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['created']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['modified']; ?>&nbsp;</td>
		<td><?php echo $persona['Persona']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $persona['Persona']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $persona['Persona']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $persona['Persona']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Persona', true), array('action' => 'add')); ?></li>
	</ul>
</div>