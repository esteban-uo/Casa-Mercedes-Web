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
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $casa['Casa']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $casa['Casa']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $casa['Casa']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $casa['Casa']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Paiseses', true), array('controller' => 'Paiseses', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Paises', true), array('controller' => 'Paiseses', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Estados', true), array('controller' => 'estados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Estado', true), array('controller' => 'estados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Municipios', true), array('controller' => 'municipios', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Municipio', true), array('controller' => 'municipios', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Usuarios', true), array('controller' => 'users', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Usuarios', true), array('controller' => 'users', 'action' => 'add')); ?> </li>
	</ul>
</div>