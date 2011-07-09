<?php
class Escolaridad extends AppModel {
	var $name = 'Escolaridad';
	var $displayField = 'ciclo_escolar_id';
	var $validate = array(
		'escuela' => array(
			'minlength' => array(
				'rule' => array('minlength'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Albergado' => array(
			'className' => 'Albergado',
			'foreignKey' => 'albergado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CicloEscolar' => array(
			'className' => 'CicloEscolar',
			'foreignKey' => 'ciclo_escolar_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
