<div class="viviendas view">
<h2><?php  __('Vivienda');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Número'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vivienda['Vivienda']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Descripción'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vivienda['Vivienda']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registrado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vivienda['Vivienda']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vivienda['Vivienda']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificado Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $vivienda['Vivienda']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Vivienda', true), array('action' => 'edit', $vivienda['Vivienda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Vivienda', true), array('action' => 'delete', $vivienda['Vivienda']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $vivienda['Vivienda']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Viviendas', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vivienda', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Socio Economicos');?></h3>
	<?php if (!empty($vivienda['SocioEconomico'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Poblacion Indigena'); ?></th>
		<th><?php __('Ha Trabajado'); ?></th>
		<th><?php __('Tiempo De Trabajo'); ?></th>
		<th><?php __('Ultimo Trabajo'); ?></th>
		<th><?php __('Tiempo'); ?></th>
		<th><?php __('Sueldo'); ?></th>
		<th><?php __('Nivel Economico'); ?></th>
		<th><?php __('Zona Id'); ?></th>
		<th><?php __('Vivienda Id'); ?></th>
		<th><?php __('Construccion Id'); ?></th>
		<th><?php __('Tenencia Id'); ?></th>
		<th><?php __('Distribucion Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($vivienda['SocioEconomico'] as $socioEconomico):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $socioEconomico['id'];?></td>
			<td><?php echo $socioEconomico['albergado_id'];?></td>
			<td><?php echo $socioEconomico['poblacion_indigena'];?></td>
			<td><?php echo $socioEconomico['ha_trabajado'];?></td>
			<td><?php echo $socioEconomico['tiempo_de_trabajo'];?></td>
			<td><?php echo $socioEconomico['ultimo_trabajo'];?></td>
			<td><?php echo $socioEconomico['tiempo'];?></td>
			<td><?php echo $socioEconomico['sueldo'];?></td>
			<td><?php echo $socioEconomico['nivel_economico'];?></td>
			<td><?php echo $socioEconomico['zona_id'];?></td>
			<td><?php echo $socioEconomico['vivienda_id'];?></td>
			<td><?php echo $socioEconomico['construccion_id'];?></td>
			<td><?php echo $socioEconomico['tenencia_id'];?></td>
			<td><?php echo $socioEconomico['distribucion_id'];?></td>
			<td><?php echo $socioEconomico['modified'];?></td>
			<td><?php echo $socioEconomico['created'];?></td>
			<td><?php echo $socioEconomico['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'socio_economicos', 'action' => 'view', $socioEconomico['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'socio_economicos', 'action' => 'edit', $socioEconomico['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'socio_economicos', 'action' => 'delete', $socioEconomico['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $socioEconomico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
