<div class="documentaciones view">
<h2><?php  __('Documentacion');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentacion['Documentacion']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Title'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentacion['Documentacion']['title']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentacion['Documentacion']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentacion['Documentacion']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $documentacion['Documentacion']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Documentacion', true), array('action' => 'edit', $documentacion['Documentacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Documentacion', true), array('action' => 'delete', $documentacion['Documentacion']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documentacion['Documentacion']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentaciones', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documentacion', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Documentos', true), array('controller' => 'documentos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Documento', true), array('controller' => 'documentos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Documentos');?></h3>
	<?php if (!empty($documentacion['Documento'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Persona Id'); ?></th>
		<th><?php __('Numero Documento'); ?></th>
		<th><?php __('Tramitada Por Cm'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($documentacion['Documento'] as $documento):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $documento['id'];?></td>
			<td><?php echo $documento['persona_id'];?></td>
			<td><?php echo $documento['numero_documento'];?></td>
			<td><?php echo $documento['tramitada_por_cm'];?></td>
			<td><?php echo $documento['created'];?></td>
			<td><?php echo $documento['modified'];?></td>
			<td><?php echo $documento['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'documentos', 'action' => 'view', $documento['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'documentos', 'action' => 'edit', $documento['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'documentos', 'action' => 'delete', $documento['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $documento['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Documento', true), array('controller' => 'documentos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
