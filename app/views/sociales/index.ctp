<div class="sociales index">
	<h2><?php __('Sociales');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('Números');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('comunicacion');?></th>
			<th><?php echo $this->Paginator->sort('roles');?></th>
			<th><?php echo $this->Paginator->sort('normas_y_valores');?></th>
			<th><?php echo $this->Paginator->sort('manejo_autoridad');?></th>
			<th><?php echo $this->Paginator->sort('observaciones');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($sociales as $social):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $social['Social']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($social['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $social['Albergado']['id'])); ?>
		</td>
		<td><?php echo $social['Social']['comunicacion']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['roles']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['normas_y_valores']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['manejo_autoridad']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['observaciones']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['created']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['modified']; ?>&nbsp;</td>
		<td><?php echo $social['Social']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $social['Social']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $social['Social']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $social['Social']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $social['Social']['id'])); ?>
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
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Social', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>