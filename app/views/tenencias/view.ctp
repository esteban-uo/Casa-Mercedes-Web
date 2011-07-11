<div class="tenencias view">
<h2><?php  __('Tenencia');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tenencia['Tenencia']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tenencia['Tenencia']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tenencia['Tenencia']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tenencia['Tenencia']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $tenencia['Tenencia']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Tenencia', true), array('action' => 'edit', $tenencia['Tenencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Tenencia', true), array('action' => 'delete', $tenencia['Tenencia']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $tenencia['Tenencia']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenencias', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenencia', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Socio Economicos');?></h3>
	<?php if (!empty($tenencia['SocioEconomico'])):?>
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
		foreach ($tenencia['SocioEconomico'] as $socioEconomico):
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
