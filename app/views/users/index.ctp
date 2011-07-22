<div class="users index">
	<h2><?php __('Users');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('grupo_id');?></th>
			<th><?php echo $this->Paginator->sort('casa_id');?></th>
			<th><?php echo $this->Paginator->sort('usuario');?></th>
			<th><?php echo $this->Paginator->sort('contraseña');?></th>
			<th><?php echo $this->Paginator->sort('fecha_alta');?></th>
			<th><?php echo $this->Paginator->sort('fecha_baja');?></th>
			<th><?php echo $this->Paginator->sort('registrado');?></th>
			<th><?php echo $this->Paginator->sort('modificado');?></th>
			<th><?php echo $this->Paginator->sort('modificado_por');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($users as $user):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $user['User']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($user['Grupo']['title'], array('controller' => 'grupos', 'action' => 'view', $user['Grupo']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($user['Casa']['direccion'], array('controller' => 'casas', 'action' => 'view', $user['Casa']['id'])); ?>
		</td>
		<td><?php echo $user['User']['username']; ?>&nbsp;</td>
		<td><?php echo $user['User']['password']; ?>&nbsp;</td>
		<td><?php echo $user['User']['fecha_alta']; ?>&nbsp;</td>
		<td><?php echo $user['User']['fecha_baja']; ?>&nbsp;</td>
		<td><?php echo $user['User']['created']; ?>&nbsp;</td>
		<td><?php echo $user['User']['modified']; ?>&nbsp;</td>
		<td><?php echo $user['User']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $user['User']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $user['User']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $user['User']['id'])); ?>
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
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Usuario', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Grupos', true), array('controller' => 'grupos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Grupo', true), array('controller' => 'grupos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
	</ul>
</div>