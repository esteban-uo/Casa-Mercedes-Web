<div class="otraEnfermedads view">
<h2><?php  __('Otra Enfermedad');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enfermedad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['enfermedad']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observaciones'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['observaciones']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enfermedad Cronica'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['enfermedad_cronica']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $otraEnfermedad['OtraEnfermedad']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Otra Enfermedad', true), array('action' => 'edit', $otraEnfermedad['OtraEnfermedad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Otra Enfermedad', true), array('action' => 'delete', $otraEnfermedad['OtraEnfermedad']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $otraEnfermedad['OtraEnfermedad']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Otra Enfermedads', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otra Enfermedad', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados Saluds', true), array('controller' => 'estados_saluds', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estados Salud', true), array('controller' => 'estados_saluds', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Estados Saluds');?></h3>
	<?php if (!empty($otraEnfermedad['EstadosSalud'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Persona Id'); ?></th>
		<th><?php __('Tipo Sangre'); ?></th>
		<th><?php __('Peso'); ?></th>
		<th><?php __('Alergias'); ?></th>
		<th><?php __('Lesiones Fisicas'); ?></th>
		<th><?php __('Discapacidad'); ?></th>
		<th><?php __('Enfermedades Cronicas'); ?></th>
		<th><?php __('Otra Enfermedad Id'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($otraEnfermedad['EstadosSalud'] as $estadosSalud):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $estadosSalud['id'];?></td>
			<td><?php echo $estadosSalud['persona_id'];?></td>
			<td><?php echo $estadosSalud['tipo_sangre'];?></td>
			<td><?php echo $estadosSalud['peso'];?></td>
			<td><?php echo $estadosSalud['alergias'];?></td>
			<td><?php echo $estadosSalud['lesiones_fisicas'];?></td>
			<td><?php echo $estadosSalud['discapacidad'];?></td>
			<td><?php echo $estadosSalud['enfermedades_cronicas'];?></td>
			<td><?php echo $estadosSalud['otra_enfermedad_id'];?></td>
			<td><?php echo $estadosSalud['created'];?></td>
			<td><?php echo $estadosSalud['modified'];?></td>
			<td><?php echo $estadosSalud['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'estados_saluds', 'action' => 'view', $estadosSalud['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'estados_saluds', 'action' => 'edit', $estadosSalud['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'estados_saluds', 'action' => 'delete', $estadosSalud['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estadosSalud['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Estados Salud', true), array('controller' => 'estados_saluds', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
