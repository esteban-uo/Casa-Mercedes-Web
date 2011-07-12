<?php
class Estado extends AppModel {
	var $name = 'Estado';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
		var $hasMany = array(
		'Casa' => array(
			'className' => 'Casas',
			'foreignKey' => 'estado_id',
			'dependent' => false,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'exclusive' => '',
			'finderQuery' => '',
			'counterQuery' => ''
		),
		'Nacimiento' => array(
			'className' => 'Nacimientos',
			'foreignKey' => 'estado_id',
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
?>