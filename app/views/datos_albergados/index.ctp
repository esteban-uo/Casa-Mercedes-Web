<div class="datosAlbergados index">
	<h2><?php __('Datos Albergados');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('albergado_id');?></th>
			<th><?php echo $this->Paginator->sort('consumo_sustancias');?></th>
			<th><?php echo $this->Paginator->sort('perforaciones');?></th>
			<th><?php echo $this->Paginator->sort('tatuajes');?></th>
			<th><?php echo $this->Paginator->sort('delitos');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($datosAlbergados as $datosAlbergado):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $datosAlbergado['DatosAlbergado']['id']; ?>&nbsp;</td>
		<td>
			<?php echo $this->Html->link($datosAlbergado['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $datosAlbergado['Albergado']['id'])); ?>
		</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['consumo_sustancias']; ?>&nbsp;</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['perforaciones']; ?>&nbsp;</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['tatuajes']; ?>&nbsp;</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['delitos']; ?>&nbsp;</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['created']; ?>&nbsp;</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['modified']; ?>&nbsp;</td>
		<td><?php echo $datosAlbergado['DatosAlbergado']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('View', true), array('action' => 'view', $datosAlbergado['DatosAlbergado']['id'])); ?>
			<?php echo $this->Html->link(__('Edit', true), array('action' => 'edit', $datosAlbergado['DatosAlbergado']['id'])); ?>
			<?php echo $this->Html->link(__('Delete', true), array('action' => 'delete', $datosAlbergado['DatosAlbergado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $datosAlbergado['DatosAlbergado']['id'])); ?>
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
		<li><?php echo $this->Html->link(__('New Datos Albergado', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>