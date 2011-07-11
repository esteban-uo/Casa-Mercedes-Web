<div class="datosAlbergados view">
<h2><?php  __('Datos Albergado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($datosAlbergado['Albergado']['persona_id'], array('controller' => 'albergados', 'action' => 'view', $datosAlbergado['Albergado']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Consumo Sustancias'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['consumo_sustancias']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Perforaciones'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['perforaciones']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tatuajes'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['tatuajes']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delitos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['delitos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $datosAlbergado['DatosAlbergado']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Datos Albergado', true), array('action' => 'edit', $datosAlbergado['DatosAlbergado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Datos Albergado', true), array('action' => 'delete', $datosAlbergado['DatosAlbergado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $datosAlbergado['DatosAlbergado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Albergados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Albergado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('controller' => 'albergados', 'action' => 'add')); ?> </li>
	</ul>
</div>
