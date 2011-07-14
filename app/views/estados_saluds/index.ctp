<div class="estadosSaluds index">
	<h2><?php __('Estados Saluds');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('persona_id');?></th>
			<th><?php echo $this->Paginator->sort('tipo_sangre');?></th>
			<th><?php echo $this->Paginator->sort('peso');?></th>
			<th><?php echo $this->Paginator->sort('alergias');?></th>
			<th><?php echo $this->Paginator->sort('lesiones_fisicas');?></th>
			<th><?php echo $this->Paginator->sort('discapacidad');?></th>
			<th><?php echo $this->Paginator->sort('enfermedades_cronicas');?></th>
			<th><?php echo $this->Paginator->sort('otra_enfermedad_id');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($estadosSaluds as $estadosSalud):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $estadosSalud['EstadosSalud']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estadosSalud['Persona']['nombre_completo'], array('controller' => 'personas', 'action' => 'view', $estadosSalud['Persona']['id'])); ?>
		</td>
		<td><?php echo $estadosSalud['EstadosSalud']['tipo_sangre']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['peso']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['alergias']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['lesiones_fisicas']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['discapacidad']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['enfermedades_cronicas']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($estadosSalud['OtraEnfermedad']['enfermedad'], array('controller' => 'otras_enfermedades', 'action' => 'view', $estadosSalud['OtraEnfermedad']['id'])); ?>
		</td>
		<td><?php echo $estadosSalud['EstadosSalud']['created']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['modified']; ?>&nbsp;</td>
		<td><?php echo $estadosSalud['EstadosSalud']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $estadosSalud['EstadosSalud']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $estadosSalud['EstadosSalud']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $estadosSalud['EstadosSalud']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estadosSalud['EstadosSalud']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Estados Salud', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otras Enfermedades', true), array('controller' => 'otras_enfermedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otra Enfermedad', true), array('controller' => 'otras_enfermedades', 'action' => 'add')); ?> </li>
	</ul>
</div>