<div class="socioEconomicos index">
	<h2><?php __('Socio Economicos');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('poblacion_indigena');?></th>
			<th><?php echo $this->Paginator->sort('ha_trabajado');?></th>
			<th><?php echo $this->Paginator->sort('tiempo_de_trabajo');?></th>
			<th><?php echo $this->Paginator->sort('ultimo_trabajo');?></th>
			<th><?php echo $this->Paginator->sort('tiempo');?></th>
			<th><?php echo $this->Paginator->sort('sueldo');?></th>
			<th><?php echo $this->Paginator->sort('nivel_economico');?></th>
			<th><?php echo $this->Paginator->sort('zona_id');?></th>
			<th><?php echo $this->Paginator->sort('vivienda_id');?></th>
			<th><?php echo $this->Paginator->sort('construccion_id');?></th>
			<th><?php echo $this->Paginator->sort('tenencia_id');?></th>
			<th><?php echo $this->Paginator->sort('distribucion_id');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($socioEconomicos as $socioEconomico):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $socioEconomico['SocioEconomico']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($socioEconomico['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $socioEconomico['Albergado']['id'])); ?>
		</td>
		<td><?php echo $socioEconomico['SocioEconomico']['poblacion_indigena']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['ha_trabajado']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['tiempo_de_trabajo']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['ultimo_trabajo']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['tiempo']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['sueldo']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['nivel_economico']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($socioEconomico['Zona']['title'], array('controller' => 'zonas', 'action' => 'view', $socioEconomico['Zona']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($socioEconomico['Vivienda']['title'], array('controller' => 'viviendas', 'action' => 'view', $socioEconomico['Vivienda']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($socioEconomico['Construccion']['title'], array('controller' => 'construcciones', 'action' => 'view', $socioEconomico['Construccion']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($socioEconomico['Tenencia']['title'], array('controller' => 'tenencias', 'action' => 'view', $socioEconomico['Tenencia']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($socioEconomico['Distribucion']['title'], array('controller' => 'distribuciones', 'action' => 'view', $socioEconomico['Distribucion']['id'])); ?>
		</td>
		<td><?php echo $socioEconomico['SocioEconomico']['modified']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['created']; ?>&nbsp;</td>
		<td><?php echo $socioEconomico['SocioEconomico']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $socioEconomico['SocioEconomico']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $socioEconomico['SocioEconomico']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $socioEconomico['SocioEconomico']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $socioEconomico['SocioEconomico']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Zonas', true), array('controller' => 'zonas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Zona', true), array('controller' => 'zonas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Viviendas', true), array('controller' => 'viviendas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Vivienda', true), array('controller' => 'viviendas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Construcciones', true), array('controller' => 'construcciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Construccion', true), array('controller' => 'construcciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Tenencias', true), array('controller' => 'tenencias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Tenencia', true), array('controller' => 'tenencias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Distribuciones', true), array('controller' => 'distribuciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Distribucion', true), array('controller' => 'distribuciones', 'action' => 'add')); ?> </li>
	</ul>
</div>