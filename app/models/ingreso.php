<?php
class Ingreso extends AppModel {
	var $name = 'Ingreso';
	//The Associations below have been created with all possible keys, those that are not needed can be removed
	
	var $validate = array(
		'fecha' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'motivo' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Motivo está vacío, ingresa los datos correspondientes.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	var $hasAndBelongsToMany = array(
		'Albergado' => array(
			'className' => 'Albergado',
			'joinTable' => 'albergados_ingresos',
			'foreignKey' => 'ingreso_id',
			'associationForeignKey' => 'albergado_id',
			'unique' => true,
			'conditions' => '',
			'fields' => '',
			'order' => '',
			'limit' => '',
			'offset' => '',
			'finderQuery' => '',
			'deleteQuery' => '',
			'insertQuery' => ''
		)
	);

}
