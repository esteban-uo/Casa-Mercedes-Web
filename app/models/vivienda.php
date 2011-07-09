<?php
class Vivienda extends AppModel {
	var $name = 'Vivienda';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasMany = array(
		'SocioEconomico' => array(
			'className' => 'SocioEconomico',
			'foreignKey' => 'vivienda_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		)
	);

}
