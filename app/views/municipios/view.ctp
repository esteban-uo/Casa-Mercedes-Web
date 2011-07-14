<div class="municipios view">
<h2><?php  __('Municipio');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Número'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Municipios'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Estado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($municipio['Estado']['title'], array('controller' => 'estados', 'action' => 'view', $municipio['Estado']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Creado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $municipio['Municipio']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modificar Municipio', true), array('action' => 'edit', $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Municipio', true), array('action' => 'delete', $municipio['Municipio']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $municipio['Municipio']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Municipios', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Municipio', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Nacimientos', true), array('controller' => 'nacimientos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Casas');?></h3>
	<?php if (!empty($municipio['Casa'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th><?php __('Direccion'); ?></th>
		<th><?php __('Telefono'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($municipio['Casa'] as $casa):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $casa['id'];?></td>
			<td><?php echo $casa['pais_id'];?></td>
			<td><?php echo $casa['estado_id'];?></td>
			<td><?php echo $casa['municipio_id'];?></td>
			<td><?php echo $casa['direccion'];?></td>
			<td><?php echo $casa['telefono'];?></td>
			<td><?php echo $casa['created'];?></td>
			<td><?php echo $casa['modified'];?></td>
			<td><?php echo $casa['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'casas', 'action' => 'view', $casa['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'casas', 'action' => 'edit', $casa['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'casas', 'action' => 'delete', $casa['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $casa['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Nacimientos');?></h3>
	<?php if (!empty($municipio['Nacimiento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Persona Id'); ?></th>
		<th><?php __('Fecha Nacimiento'); ?></th>
		<th><?php __('Pais Id'); ?></th>
		<th><?php __('Estado Id'); ?></th>
		<th><?php __('Municipio Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($municipio['Nacimiento'] as $nacimiento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $nacimiento['id'];?></td>
			<td><?php echo $nacimiento['persona_id'];?></td>
			<td><?php echo $nacimiento['fecha_nacimiento'];?></td>
			<td><?php echo $nacimiento['pais_id'];?></td>
			<td><?php echo $nacimiento['estado_id'];?></td>
			<td><?php echo $nacimiento['municipio_id'];?></td>
			<td><?php echo $nacimiento['created'];?></td>
			<td><?php echo $nacimiento['modified'];?></td>
			<td><?php echo $nacimiento['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'nacimientos', 'action' => 'view', $nacimiento['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'nacimientos', 'action' => 'edit', $nacimiento['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'nacimientos', 'action' => 'delete', $nacimiento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $nacimiento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Nacimiento', true), array('controller' => 'nacimientos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
