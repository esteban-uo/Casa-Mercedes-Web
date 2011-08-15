<?php 
$arreglo = $this->requestAction(array(
					'controller' => 'pages',
					'action' => 'obtenerEstadisticasPrincipales',
					'named' => array(
						'albergados' => true,
						'dependientes' => true,
						'ultimosAlbergados' => true
				)
			)
		);
?>
<h3>Estádisticas Generales</h3>
<ul>
	<li>Total de Albergadas: <span class="formateotxt_strong"><?php echo $arreglo['totalAlbergados']; ?></span></li>
	<li>Total de Hijas(os): <span class="formateotxt_strong"><?php echo $arreglo['totalDependientes']; ?></span></li>
</ul>

<h3>Últimos Albergados añadidos</h3>
<ul>
	<?php foreach($arreglo['listaAlbergados'] as $key => $values): ?>
	<li>Nombre: <span class="formateotxt_strong"><?php echo $this->Html->link($arreglo['listaAlbergados'][$key]['Albergados']['nombre_completo'], array('controller'=>'albergados','action' => 'view', $arreglo['listaAlbergados'][$key]['Albergados']['id'])); ?></span></li>
	<?php endforeach; ?>
</ul>
