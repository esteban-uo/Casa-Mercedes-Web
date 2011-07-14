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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Expediente'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['expediente']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Casa'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $this->Html->link($albergado['Casa']['id'], array('controller' => 'casas', 'action' => 'view', $albergado['Casa']['id'])); ?>
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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Cantidad de Hijos'); ?></dt>
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
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Familiograma Imagen'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['familiograma_imagen_id']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Registrada'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['created']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificada'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['modified']; ?>
			&nbsp;
		</dd>
		<dt<?php if ($i % 2 == 0) echo $class;?>><?php __('Modificada Por'); ?></dt>
		<dd<?php if ($i++ % 2 == 0) echo $class;?>>
			<?php echo $albergado['Albergado']['modified_user_id']; ?>
			&nbsp;
		</dd>
	</dl>
</div>
<div class="actions">
	<h3><?php __('Acciones'); ?></h3>
	<ul>
		<li><?php echo $this->Html->link(__('Modificar Albergado', true), array('action' => 'edit', $albergado['Albergado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('EliminarAlbergado', true), array('action' => 'delete', $albergado['Albergado']['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $albergado['Albergado']['id'])); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Albergados', true), array('action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Albergado', true), array('action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Personas', true), array('controller' => 'personas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Persona', true), array('controller' => 'personas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Casas', true), array('controller' => 'casas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Casa', true), array('controller' => 'casas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Datos', true), array('controller' => 'datos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Dato', true), array('controller' => 'datos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Dependientes', true), array('controller' => 'dependientes', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Dependiente', true), array('controller' => 'dependientes', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Escolaridades', true), array('controller' => 'escolaridades', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Escolaridad', true), array('controller' => 'escolaridades', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Familias', true), array('controller' => 'familias', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Familia', true), array('controller' => 'familias', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Ingresos', true), array('controller' => 'ingresos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Ingreso', true), array('controller' => 'ingresos', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Instituciones', true), array('controller' => 'instituciones', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Institucion', true), array('controller' => 'instituciones', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Problematicas', true), array('controller' => 'problematicas', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Problematica', true), array('controller' => 'problematicas', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Sociales', true), array('controller' => 'sociales', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Social', true), array('controller' => 'sociales', 'action' => 'add')); ?> </li>
		<li><?php echo $this->Html->link(__('Ver Socio Economicos', true), array('controller' => 'socio_economicos', 'action' => 'index')); ?> </li>
		<li><?php echo $this->Html->link(__('Agregar Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add')); ?> </li>
	</ul>
</div>
<div class="related">
	<h3><?php __('Related Datos');?></h3>
	<?php if (!empty($albergado['Dato'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Plan Social'); ?></th>
		<th><?php __('Historia De Vida'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Dato'] as $dato):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $dato['id'];?></td>
			<td><?php echo $dato['albergado_id'];?></td>
			<td><?php echo $dato['plan_social'];?></td>
			<td><?php echo $dato['historia_de_vida'];?></td>
			<td><?php echo $dato['created'];?></td>
			<td><?php echo $dato['modified'];?></td>
			<td><?php echo $dato['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'datos', 'action' => 'view', $dato['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'datos', 'action' => 'edit', $dato['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'datos', 'action' => 'delete', $dato['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $dato['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Dato', true), array('controller' => 'datos', 'action' => 'add'));?> </li>
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
	<h3><?php __('Related Familias');?></h3>
	<?php if (!empty($albergado['Familia'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Ambos Padres'); ?></th>
		<th><?php __('Padre O Madre'); ?></th>
		<th><?php __('Hermanos'); ?></th>
		<th><?php __('Hermanos En Hogar'); ?></th>
		<th><?php __('Hermanos Con Familia'); ?></th>
		<th><?php __('Contacto Con Hermanos'); ?></th>
		<th><?php __('Otros Familiares'); ?></th>
		<th><?php __('Contacto Con Familiares'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Familia'] as $familia):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $familia['id'];?></td>
			<td><?php echo $familia['albergado_id'];?></td>
			<td><?php echo $familia['ambos_padres'];?></td>
			<td><?php echo $familia['padre_o_madre'];?></td>
			<td><?php echo $familia['hermanos'];?></td>
			<td><?php echo $familia['hermanos_en_hogar'];?></td>
			<td><?php echo $familia['hermanos_con_familia'];?></td>
			<td><?php echo $familia['contacto_con_hermanos'];?></td>
			<td><?php echo $familia['otros_familiares'];?></td>
			<td><?php echo $familia['contacto_con_familiares'];?></td>
			<td><?php echo $familia['observaciones'];?></td>
			<td><?php echo $familia['created'];?></td>
			<td><?php echo $familia['modified'];?></td>
			<td><?php echo $familia['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'familias', 'action' => 'view', $familia['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'familias', 'action' => 'edit', $familia['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'familias', 'action' => 'delete', $familia['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $familia['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Familia', true), array('controller' => 'familias', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Ingresos');?></h3>
	<?php if (!empty($albergado['Ingreso'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
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
			<td><?php echo $ingreso['albergado_id'];?></td>
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
<div class="related">
	<h3><?php __('Related Instituciones');?></h3>
	<?php if (!empty($albergado['Institucion'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Institucion'); ?></th>
		<th><?php __('Fecha Ingreso'); ?></th>
		<th><?php __('Fecha Egreso'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Institucion'] as $institucion):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $institucion['id'];?></td>
			<td><?php echo $institucion['albergado_id'];?></td>
			<td><?php echo $institucion['institucion'];?></td>
			<td><?php echo $institucion['fecha_ingreso'];?></td>
			<td><?php echo $institucion['fecha_egreso'];?></td>
			<td><?php echo $institucion['created'];?></td>
			<td><?php echo $institucion['modified'];?></td>
			<td><?php echo $institucion['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'instituciones', 'action' => 'view', $institucion['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'instituciones', 'action' => 'edit', $institucion['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'instituciones', 'action' => 'delete', $institucion['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $institucion['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Institucion', true), array('controller' => 'instituciones', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Problematicas');?></h3>
	<?php if (!empty($albergado['Problematica'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Calle'); ?></th>
		<th><?php __('Abandono'); ?></th>
		<th><?php __('Situacion Socieconomica'); ?></th>
		<th><?php __('Omision De Cuidados'); ?></th>
		<th><?php __('Violencia'); ?></th>
		<th><?php __('Abuso Sexual'); ?></th>
		<th><?php __('Otros Delitos'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Problematica'] as $problematica):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $problematica['id'];?></td>
			<td><?php echo $problematica['albergado_id'];?></td>
			<td><?php echo $problematica['calle'];?></td>
			<td><?php echo $problematica['abandono'];?></td>
			<td><?php echo $problematica['situacion_socieconomica'];?></td>
			<td><?php echo $problematica['omision_de_cuidados'];?></td>
			<td><?php echo $problematica['violencia'];?></td>
			<td><?php echo $problematica['abuso_sexual'];?></td>
			<td><?php echo $problematica['otros_delitos'];?></td>
			<td><?php echo $problematica['created'];?></td>
			<td><?php echo $problematica['modified'];?></td>
			<td><?php echo $problematica['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'problematicas', 'action' => 'view', $problematica['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'problematicas', 'action' => 'edit', $problematica['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'problematicas', 'action' => 'delete', $problematica['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $problematica['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Problematica', true), array('controller' => 'problematicas', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Sociales');?></h3>
	<?php if (!empty($albergado['Social'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Comunicacion'); ?></th>
		<th><?php __('Roles'); ?></th>
		<th><?php __('Normas Y Valores'); ?></th>
		<th><?php __('Manejo Autoridad'); ?></th>
		<th><?php __('Observaciones'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['Social'] as $social):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $social['id'];?></td>
			<td><?php echo $social['albergado_id'];?></td>
			<td><?php echo $social['comunicacion'];?></td>
			<td><?php echo $social['roles'];?></td>
			<td><?php echo $social['normas_y_valores'];?></td>
			<td><?php echo $social['manejo_autoridad'];?></td>
			<td><?php echo $social['observaciones'];?></td>
			<td><?php echo $social['created'];?></td>
			<td><?php echo $social['modified'];?></td>
			<td><?php echo $social['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'sociales', 'action' => 'view', $social['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'sociales', 'action' => 'edit', $social['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'sociales', 'action' => 'delete', $social['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $social['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Social', true), array('controller' => 'sociales', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
<div class="related">
	<h3><?php __('Related Socio Economicos');?></h3>
	<?php if (!empty($albergado['SocioEconomico'])):?>
	<table cellpadding = "0" cellspacing = "0">
	<tr>
		<th><?php __('Id'); ?></th>
		<th><?php __('Albergado Id'); ?></th>
		<th><?php __('Poblacion Indigena'); ?></th>
		<th><?php __('Ha Trabajado'); ?></th>
		<th><?php __('Tiempo De Trabajo'); ?></th>
		<th><?php __('Ultimo Trabajo'); ?></th>
		<th><?php __('Tiempo'); ?></th>
		<th><?php __('Sueldo'); ?></th>
		<th><?php __('Nivel Economico'); ?></th>
		<th><?php __('Zona Id'); ?></th>
		<th><?php __('Vivienda Id'); ?></th>
		<th><?php __('Construccion Id'); ?></th>
		<th><?php __('Tenencia Id'); ?></th>
		<th><?php __('Distribucion Id'); ?></th>
		<th><?php __('Modified'); ?></th>
		<th><?php __('Created'); ?></th>
		<th><?php __('Modified User Id'); ?></th>
		<th class="actions"><?php __('Actions');?></th>
	</tr>
	<?php
		$i = 0;
		foreach ($albergado['SocioEconomico'] as $socioEconomico):
			$class = null;
			if ($i++ % 2 == 0) {
				$class = ' class="altrow"';
			}
		?>
		<tr<?php echo $class;?>>
			<td><?php echo $socioEconomico['id'];?></td>
			<td><?php echo $socioEconomico['albergado_id'];?></td>
			<td><?php echo $socioEconomico['poblacion_indigena'];?></td>
			<td><?php echo $socioEconomico['ha_trabajado'];?></td>
			<td><?php echo $socioEconomico['tiempo_de_trabajo'];?></td>
			<td><?php echo $socioEconomico['ultimo_trabajo'];?></td>
			<td><?php echo $socioEconomico['tiempo'];?></td>
			<td><?php echo $socioEconomico['sueldo'];?></td>
			<td><?php echo $socioEconomico['nivel_economico'];?></td>
			<td><?php echo $socioEconomico['zona_id'];?></td>
			<td><?php echo $socioEconomico['vivienda_id'];?></td>
			<td><?php echo $socioEconomico['construccion_id'];?></td>
			<td><?php echo $socioEconomico['tenencia_id'];?></td>
			<td><?php echo $socioEconomico['distribucion_id'];?></td>
			<td><?php echo $socioEconomico['modified'];?></td>
			<td><?php echo $socioEconomico['created'];?></td>
			<td><?php echo $socioEconomico['modified_user_id'];?></td>
			<td class="actions">
				<?php echo $this->Html->link(__('View', true), array('controller' => 'socio_economicos', 'action' => 'view', $socioEconomico['id'])); ?>
				<?php echo $this->Html->link(__('Edit', true), array('controller' => 'socio_economicos', 'action' => 'edit', $socioEconomico['id'])); ?>
				<?php echo $this->Html->link(__('Delete', true), array('controller' => 'socio_economicos', 'action' => 'delete', $socioEconomico['id']), null, sprintf(__('Are you sure you want to delete # %s?', true), $socioEconomico['id'])); ?>
			</td>
		</tr>
	<?php endforeach; ?>
	</table>
<?php endif; ?>

	<div class="actions">
		<ul>
			<li><?php echo $this->Html->link(__('New Socio Economico', true), array('controller' => 'socio_economicos', 'action' => 'add'));?> </li>
		</ul>
	</div>
</div>
