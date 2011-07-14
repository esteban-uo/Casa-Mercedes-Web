<div class="cicloEscolars view">
<h2><?php  __('Ciclo Escolar');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cicloEscolar['CicloEscolar']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripcion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cicloEscolar['CicloEscolar']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registrado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cicloEscolar['CicloEscolar']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cicloEscolar['CicloEscolar']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $cicloEscolar['CicloEscolar']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modificar Ciclo Escolar', true), array('action' => 'edit', $cicloEscolar['CicloEscolar']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Eliminar Ciclo Escolar', true), array('action' => 'delete', $cicloEscolar['CicloEscolar']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cicloEscolar['CicloEscolar']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Ciclo Escolars', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Ciclo Escolar', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Escolaridades');?></h3>
	<?php if (!empty($cicloEscolar['Escolaridad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Ciclo Escolar Id'); ?></th>
		<th><?php __('Escuela'); ?></th>
		<th><?php __('Escolaridad'); ?></th>
		<th><?php __('Grado'); ?></th>
		<th><?php __('Inscrito'); ?></th>
		<th><?php __('Statusfinal'); ?></th>
		<th><?php __('Fecha Baja'); ?></th>
		<th><?php __('Motivo Baja'); ?></th>
		<th><?php __('Certificado'); ?></th>
		<th><?php __('Boleta'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($cicloEscolar['Escolaridad'] as $escolaridad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $escolaridad['id'];?></td>
			<td><?php echo $escolaridad['albergado_id'];?></td>
			<td><?php echo $escolaridad['ciclo_escolar_id'];?></td>
			<td><?php echo $escolaridad['escuela'];?></td>
			<td><?php echo $escolaridad['escolaridad'];?></td>
			<td><?php echo $escolaridad['grado'];?></td>
			<td><?php echo $escolaridad['inscrito'];?></td>
			<td><?php echo $escolaridad['statusfinal'];?></td>
			<td><?php echo $escolaridad['fecha_baja'];?></td>
			<td><?php echo $escolaridad['motivo_baja'];?></td>
			<td><?php echo $escolaridad['certificado'];?></td>
			<td><?php echo $escolaridad['boleta'];?></td>
			<td><?php echo $escolaridad['created'];?></td>
			<td><?php echo $escolaridad['modified'];?></td>
			<td><?php echo $escolaridad['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'escolaridades', 'action' => 'view', $escolaridad['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'escolaridades', 'action' => 'edit', $escolaridad['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'escolaridades', 'action' => 'delete', $escolaridad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $escolaridad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
