<div class="socioEconomicos view">
<h2><?php  __('Socio Economico');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($socioEconomico['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $socioEconomico['Albergado']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Poblacion Indigena'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['poblacion_indigena']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ha Trabajado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['ha_trabajado']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tiempo De Trabajo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['tiempo_de_trabajo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ultimo Trabajo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['ultimo_trabajo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tiempo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['tiempo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sueldo'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['sueldo']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nivel Economico'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['nivel_economico']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($socioEconomico['Zona']['title'], array('controller' => 'zonas', 'action' => 'view', $socioEconomico['Zona']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vivienda'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($socioEconomico['Vivienda']['title'], array('controller' => 'viviendas', 'action' => 'view', $socioEconomico['Vivienda']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Construccion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($socioEconomico['Construccion']['title'], array('controller' => 'construcciones', 'action' => 'view', $socioEconomico['Construccion']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tenencia'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($socioEconomico['Tenencia']['title'], array('controller' => 'tenencias', 'action' => 'view', $socioEconomico['Tenencia']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Distribucion'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($socioEconomico['Distribucion']['title'], array('controller' => 'distribuciones', 'action' => 'view', $socioEconomico['Distribucion']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $socioEconomico['SocioEconomico']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Socio Economico', true), array('action' => 'edit', $socioEconomico['SocioEconomico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Socio Economico', true), array('action' => 'delete', $socioEconomico['SocioEconomico']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $socioEconomico['SocioEconomico']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('action' => 'add')); ?> </li>
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
