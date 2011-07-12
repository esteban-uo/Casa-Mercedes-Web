<?php
class SocioEconomico extends AppModel {
	var $name = 'SocioEconomico';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	var $belongsTo = array(
		'Albergado' => array(
			'className' => 'Albergados',
			'foreignKey' => 'albergado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Construccion' => array(
			'className' => 'Construcciones',
			'foreignKey' => 'construccion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Zona' => array(
			'className' => 'Zona',
			'foreignKey' => 'zona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Vivienda' => array(
			'className' => 'Vivienda',
			'foreignKey' => 'vivienda_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Tenencia' => array(
			'className' => 'Tenencia',
			'foreignKey' => 'tenencia_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Distribucion' => array(
			'className' => 'Distribucion',
			'foreignKey' => 'distribucion_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
?>