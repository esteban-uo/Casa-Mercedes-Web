<?php
class Construccion extends AppModel {
	var $name = 'Construccion';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	var $hasMany = array(
		'SocioEconomico' => array(
			'className' => 'SocioEconomico',
			'foreignKey' => 'construccion_id',
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
