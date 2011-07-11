<div class="escolaridades index">
	<h2><?php __('Escolaridades');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('ciclo_escolar_id');?></th>
			<th><?php echo $this->Paginator->sort('escuela');?></th>
			<th><?php echo $this->Paginator->sort('escolaridad');?></th>
			<th><?php echo $this->Paginator->sort('grado');?></th>
			<th><?php echo $this->Paginator->sort('inscrito');?></th>
			<th><?php echo $this->Paginator->sort('statusfinal');?></th>
			<th><?php echo $this->Paginator->sort('fecha_baja');?></th>
			<th><?php echo $this->Paginator->sort('motivo_baja');?></th>
			<th><?php echo $this->Paginator->sort('certificado');?></th>
			<th><?php echo $this->Paginator->sort('boleta');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($escolaridades as $escolaridad):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $escolaridad['Escolaridad']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($escolaridad['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $escolaridad['Albergado']['id'])); ?>
		</td>
		<td>
			<?php echo $this->Html->link($escolaridad['CicloEscolar']['title'], array('controller' => 'ciclos_escolares', 'action' => 'view', $escolaridad['CicloEscolar']['id'])); ?>
		</td>
		<td><?php echo $escolaridad['Escolaridad']['escuela']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['escolaridad']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['grado']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['inscrito']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['statusfinal']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['fecha_baja']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['motivo_baja']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['certificado']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['boleta']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['created']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['modified']; ?>&nbsp;</td>
		<td><?php echo $escolaridad['Escolaridad']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $escolaridad['Escolaridad']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $escolaridad['Escolaridad']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $escolaridad['Escolaridad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $escolaridad['Escolaridad']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Escolaridad', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ciclos Escolares', true), array('controller' => 'ciclos_escolares', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ciclo Escolar', true), array('controller' => 'ciclos_escolares', 'action' => 'add')); ?> </li>
	</ul>
</div>