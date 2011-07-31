<div class="albergados view">
<h2><?php  __('Albergado');?></h2>
	<dl><?php $i = 0; $class = ' class="altrow"';?>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Persona'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($albergado['Persona']['primer_nombre'], array('controller' => 'personas', 'action' => 'view', $albergado['Persona']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Numero Embarazos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['numero_embarazos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Expediente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['expediente']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Casa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($albergado['Casa']['direccion'], array('controller' => 'casas', 'action' => 'view', $albergado['Casa']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Ingreso'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['fecha_ingreso']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Embarazo Actual'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['embarazo_actual']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cant Hijos'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['cant_hijos']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Remitida Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['remitida_por']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Averiguacion Previa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['averiguacion_previa']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Foto Imagen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($albergado['FotoImagen']['id'], array('controller' => 'images', 'action' => 'view', $albergado['FotoImagen']['id'])); ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Actions'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Edit Albergado', true), array('action' => 'edit', $albergado['Albergado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Delete Albergado', true), array('action' => 'delete', $albergado['Albergado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $albergado['Albergado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('List Albergados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Albergado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Images', true), array('controller' => 'images', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Foto Imagen', true), array('controller' => 'images', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Instituciones', true), array('controller' => 'instituciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Institucion', true), array('controller' => 'instituciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Familias', true), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Familia', true), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Sociales', true), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Social', true), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Problematicas', true), array('controller' => 'problematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Problematica', true), array('controller' => 'problematicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos', true), array('controller' => 'datos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dato', true), array('controller' => 'datos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Datos Albergados', true), array('controller' => 'datos_albergados', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Datos Albergado', true), array('controller' => 'datos_albergados', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Dependientes', true), array('controller' => 'dependientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Dependiente', true), array('controller' => 'dependientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('List Ingresos', true), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('New Ingreso', true), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
	</ul>
</div>
	<div class="related">
		<h3><?php __('Related Instituciones');?></h3>
	<?php if (!empty($albergado['Institucion'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Institucion');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['institucion'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Ingreso');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['fecha_ingreso'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Fecha Egreso');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['fecha_egreso'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Institucion']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Institucion', true), array('controller' => 'instituciones', 'action' => 'edit', $albergado['Institucion']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Familias');?></h3>
	<?php if (!empty($albergado['Familia'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ambos Padres');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['ambos_padres'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Padre O Madre');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['padre_o_madre'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hermanos');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['hermanos'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hermanos En Hogar');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['hermanos_en_hogar'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Hermanos Con Familia');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['hermanos_con_familia'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contacto Con Hermanos');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['contacto_con_hermanos'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Otros Familiares');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['otros_familiares'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Contacto Con Familiares');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['contacto_con_familiares'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observaciones');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['observaciones'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Familia']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Familia', true), array('controller' => 'familias', 'action' => 'edit', $albergado['Familia']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Sociales');?></h3>
	<?php if (!empty($albergado['Social'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Comunicacion');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['comunicacion'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Roles');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['roles'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Normas Y Valores');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['normas_y_valores'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Manejo Autoridad');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['manejo_autoridad'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Observaciones');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['observaciones'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Social']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Social', true), array('controller' => 'sociales', 'action' => 'edit', $albergado['Social']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Socio Economicos');?></h3>
	<?php if (!empty($albergado['SocioEconomico'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Poblacion Indigena');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['poblacion_indigena'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ha Trabajado');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['ha_trabajado'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tiempo De Trabajo');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['tiempo_de_trabajo'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Ultimo Trabajo');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['ultimo_trabajo'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tiempo');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['tiempo'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Sueldo');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['sueldo'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Nivel Economico');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['nivel_economico'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Zona Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['zona_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Vivienda Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['vivienda_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Construccion Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['construccion_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tenencia Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['tenencia_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Distribucion Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['distribucion_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['SocioEconomico']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'edit', $albergado['SocioEconomico']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Problematicas');?></h3>
	<?php if (!empty($albergado['Problematica'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Calle');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['calle'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Abandono');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['abandono'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Situacion Socieconomica');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['situacion_socieconomica'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Omision De Cuidados');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['omision_de_cuidados'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Violencia');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['violencia'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Abuso Sexual');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['abuso_sexual'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Otros Delitos');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['otros_delitos'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Problematica']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Problematica', true), array('controller' => 'problematicas', 'action' => 'edit', $albergado['Problematica']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Datos');?></h3>
	<?php if (!empty($albergado['Dato'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Plan Social');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['plan_social'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Historia De Vida');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['historia_de_vida'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['Dato']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Dato', true), array('controller' => 'datos', 'action' => 'edit', $albergado['Dato']['id'])); ?></li>
			</ul>
		</div>
	</div>
		<div class="related">
		<h3><?php __('Related Datos Albergados');?></h3>
	<?php if (!empty($albergado['DatosAlbergado'])):?>
		<dl>	<?php $i = 0; $class = ' class="altrow"';?>
			<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Albergado Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['albergado_id'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Consumo Sustancias');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['consumo_sustancias'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Perforaciones');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['perforaciones'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Tatuajes');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['tatuajes'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Delitos');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['delitos'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Created');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['created'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['modified'];?>
&nbsp;</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modified User Id');?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
	<?php echo $albergado['DatosAlbergado']['modified_user_id'];?>
&nbsp;</dd>
		</dl>
	<?php endif; ?>
		<div class="actions">
			<ul>
				<li><?php echo $this->Html->link(__('Edit Datos Albergado', true), array('controller' => 'datos_albergados', 'action' => 'edit', $albergado['DatosAlbergado']['id'])); ?></li>
			</ul>
		</div>
	</div>
	<div class="related">
	<h3><?php __('Related Dependientes');?></h3>
	<?php if (!empty($albergado['Dependiente'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Persona Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Expediente'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Dependiente'] as $dependiente):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $dependiente['id'];?></td>
			<td><?php echo $dependiente['persona_id'];?></td>
			<td><?php echo $dependiente['albergado_id'];?></td>
			<td><?php echo $dependiente['expediente'];?></td>
			<td><?php echo $dependiente['created'];?></td>
			<td><?php echo $dependiente['modified'];?></td>
			<td><?php echo $dependiente['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'dependientes', 'action' => 'view', $dependiente['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'dependientes', 'action' => 'edit', $dependiente['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'dependientes', 'action' => 'delete', $dependiente['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dependiente['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dependiente', true), array('controller' => 'dependientes', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Escolaridades');?></h3>
	<?php if (!empty($albergado['Escolaridad'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Ciclo Escolar Id'); ?></th>
		<th><?php __('Escuela'); ?></th>
		<th><?php __('Escolaridad Al Ingresar'); ?></th>
		<th><?php __('Escolaridad'); ?></th>
		<th><?php __('Grado'); ?></th>
		<th><?php __('Inscrito'); ?></th>
		<th><?php __('Statusfinal'); ?></th>
		<th><?php __('Fecha Baja'); ?></th>
		<th><?php __('Motivo Baja'); ?></th>
		<th><?php __('Certificado'); ?></th>
		<th><?php __('Boleta'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Escolaridad'] as $escolaridad):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $escolaridad['id'];?></td>
			<td><?php echo $escolaridad['albergado_id'];?></td>
			<td><?php echo $escolaridad['ciclo_escolar_id'];?></td>
			<td><?php echo $escolaridad['escuela'];?></td>
			<td><?php echo $escolaridad['escolaridad_al_ingresar'];?></td>
			<td><?php echo $escolaridad['escolaridad'];?></td>
			<td><?php echo $escolaridad['grado'];?></td>
			<td><?php echo $escolaridad['inscrito'];?></td>
			<td><?php echo $escolaridad['statusfinal'];?></td>
			<td><?php echo $escolaridad['fecha_baja'];?></td>
			<td><?php echo $escolaridad['motivo_baja'];?></td>
			<td><?php echo $escolaridad['certificado'];?></td>
			<td><?php echo $escolaridad['boleta'];?></td>
			<td><?php echo $escolaridad['created'];?></td>
			<td><?php echo $escolaridad['modified'];?></td>
			<td><?php echo $escolaridad['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'escolaridades', 'action' => 'view', $escolaridad['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'escolaridades', 'action' => 'edit', $escolaridad['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'escolaridades', 'action' => 'delete', $escolaridad['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $escolaridad['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Ingresos');?></h3>
	<?php if (!empty($albergado['Ingreso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Fecha'); ?></th>
		<th><?php __('Motivo'); ?></th>
		<th><?php __('Ingreso Egreso'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Ingreso'] as $ingreso):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $ingreso['id'];?></td>
			<td><?php echo $ingreso['fecha'];?></td>
			<td><?php echo $ingreso['motivo'];?></td>
			<td><?php echo $ingreso['ingreso_egreso'];?></td>
			<td><?php echo $ingreso['created'];?></td>
			<td><?php echo $ingreso['modified'];?></td>
			<td><?php echo $ingreso['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'ingresos', 'action' => 'view', $ingreso['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'ingresos', 'action' => 'edit', $ingreso['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'ingresos', 'action' => 'delete', $ingreso['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $ingreso['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Ingreso', true), array('controller' => 'ingresos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
