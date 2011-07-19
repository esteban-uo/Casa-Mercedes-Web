<?php
class Ingreso extends AppModel {
	var $name = 'Ingreso';
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
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Albergado' => array(
			'className' => 'Albergado',
			'foreignKey' => 'albergado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
