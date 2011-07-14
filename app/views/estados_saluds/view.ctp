<div class="estadosSaluds view">
<h2><?php  __('Estados Salud');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Persona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($estadosSalud['Persona']['nombre_completo'], array('controller' => 'personas', 'action' => 'view', $estadosSalud['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tipo Sangre'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['tipo_sangre']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Peso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['peso']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Alergias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['alergias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Lesiones Fisicas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['lesiones_fisicas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Discapacidad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['discapacidad']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Enfermedades Cronicas'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['enfermedades_cronicas']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Otra Enfermedad'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($estadosSalud['OtraEnfermedad']['enfermedad'], array('controller' => 'otras_enfermedades', 'action' => 'view', $estadosSalud['OtraEnfermedad']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $estadosSalud['EstadosSalud']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Estados Salud', true), array('action' => 'edit', $estadosSalud['EstadosSalud']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Estados Salud', true), array('action' => 'delete', $estadosSalud['EstadosSalud']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $estadosSalud['EstadosSalud']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Estados Saluds', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Estados Salud', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Otras Enfermedades', true), array('controller' => 'otras_enfermedades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Otra Enfermedad', true), array('controller' => 'otras_enfermedades', 'action' => 'add')); ?> </li>
	</ul>
</div>
