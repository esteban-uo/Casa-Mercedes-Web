<div class="ingresos view">
<h2><?php  __('Ingreso');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['fecha']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Motivo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['motivo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ingreso Egreso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['ingreso_egreso']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $ingreso['Ingreso']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Ingreso', true), array('action' => 'edit', $ingreso['Ingreso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Ingreso', true), array('action' => 'delete', $ingreso['Ingreso']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingreso['Ingreso']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Albergados');?></h3>
	<?php if (!empty($ingreso['Albergado'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Persona Id'); ?></th>
		<th><?php __('Numero Embarazos'); ?></th>
		<th><?php __('Expediente'); ?></th>
		<th><?php __('Casa Id'); ?></th>
		<th><?php __('Fecha Ingreso'); ?></th>
		<th><?php __('Embarazo Actual'); ?></th>
		<th><?php __('Cant Hijos'); ?></th>
		<th><?php __('Remitida Por'); ?></th>
		<th><?php __('Averiguacion Previa'); ?></th>
		<th><?php __('Familiograma Imagen Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($ingreso['Albergado'] as $albergado):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $albergado['id'];?></td>
			<td><?php echo $albergado['persona_id'];?></td>
			<td><?php echo $albergado['numero_embarazos'];?></td>
			<td><?php echo $albergado['expediente'];?></td>
			<td><?php echo $albergado['casa_id'];?></td>
			<td><?php echo $albergado['fecha_ingreso'];?></td>
			<td><?php echo $albergado['embarazo_actual'];?></td>
			<td><?php echo $albergado['cant_hijos'];?></td>
			<td><?php echo $albergado['remitida_por'];?></td>
			<td><?php echo $albergado['averiguacion_previa'];?></td>
			<td><?php echo $albergado['familiograma_imagen_id'];?></td>
			<td><?php echo $albergado['created'];?></td>
			<td><?php echo $albergado['modified'];?></td>
			<td><?php echo $albergado['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'albergados', 'action' => 'view', $albergado['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'albergados', 'action' => 'edit', $albergado['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'albergados', 'action' => 'delete', $albergado['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $albergado['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
