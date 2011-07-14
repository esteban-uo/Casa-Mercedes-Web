<div class="cicloEscolars index">
	<h2><?php __('Ciclo Escolares');?></h2>
	<table cellpadding="0" cellspacing="0">
	<tr>
			<th><?php echo $this->Paginator->sort('id');?></th>
			<th><?php echo $this->Paginator->sort('title');?></th>
			<th><?php echo $this->Paginator->sort('created');?></th>
			<th><?php echo $this->Paginator->sort('modified');?></th>
			<th><?php echo $this->Paginator->sort('modified_user_id');?></th>
			<th class="actions"><?php __('Acciones');?></th>
	</tr>
	<?php
	$i = 0;
	foreach ($cicloEscolars as $cicloEscolar):
		$class = null;
		if ($i++ % 2 == 0) {
			$class = ' class="altrow"';
		}
	?>
	<tr<?php echo $class;?>>
		<td><?php echo $cicloEscolar['CicloEscolar']['id']; ?>&nbsp;</td>
		<td><?php echo $cicloEscolar['CicloEscolar']['title']; ?>&nbsp;</td>
		<td><?php echo $cicloEscolar['CicloEscolar']['created']; ?>&nbsp;</td>
		<td><?php echo $cicloEscolar['CicloEscolar']['modified']; ?>&nbsp;</td>
		<td><?php echo $cicloEscolar['CicloEscolar']['modified_user_id']; ?>&nbsp;</td>
		<td class="actions">
			<?php echo $this->Html->link(__('Ver', true), array('action' => 'view', $cicloEscolar['CicloEscolar']['id'])); ?>
			<?php echo $this->Html->link(__('Modificar', true), array('action' => 'edit', $cicloEscolar['CicloEscolar']['id'])); ?>
			<?php echo $this->Html->link(__('Eliminar', true), array('action' => 'delete', $cicloEscolar['CicloEscolar']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $cicloEscolar['CicloEscolar']['id'])); ?>
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
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Agregar Ciclo Escolar', true), array('action' => 'add')); ?></li>
		<li><?php echo $this->Html->link(__('Ver Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
	</ul>
</div>