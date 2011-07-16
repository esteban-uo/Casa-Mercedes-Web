<div class="otraEnfermedads index">
	<h2><?php __('Otra Enfermedads');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('enfermedad');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('enfermedad_cronica');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($otraEnfermedads as $otraEnfermedad):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['id']; ?>&nbsp;</td>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['enfermedad']; ?>&nbsp;</td>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['observaciones']; ?>&nbsp;</td>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['enfermedad_cronica']; ?>&nbsp;</td>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['created']; ?>&nbsp;</td>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['modified']; ?>&nbsp;</td>
		<td><?php echo $otraEnfermedad['OtraEnfermedad']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $otraEnfermedad['OtraEnfermedad']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $otraEnfermedad['OtraEnfermedad']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $otraEnfermedad['OtraEnfermedad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $otraEnfermedad['OtraEnfermedad']['id'])); ?>
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
		<?php echo $this->Paginator->prev('<< ' . __('Anterior', true), array(), null, array('class'=>'disabled'));?>
	 | 	<?php echo $this->Paginator->numbers();?>
 |
		<?php echo $this->Paginator->next(__('Siguiente', true) . ' >>', array(), null, array('class' => 'disabled'));?>
	</div>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Otra Enfermedad', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Estados Saluds', true), array('controller' => 'estados_saluds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Estados Salud', true), array('controller' => 'estados_saluds', 'action' => 'add')); ?> </li>
	</ul>
</div>