<?php
class EstadosSalud extends AppModel {
	var $name = 'EstadosSalud';
	var $useTable = 'estados_salud';
	var $validate = array(
		'tipo_sangre' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Tipo de Sangre está vacío, Ingresa por favor tu tipo de sangre.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'peso' => array(
			'decimal' => array(
				'rule' => array('decimal'),
				'message' => 'El campo Peso debe de ser decimal o entero, Ingresa por favor tu peso.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Peso está vacío, agrega el peso de la persona.',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),			
		),
		'discapacidad' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'enfermedades_cronicas' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'otra_enfermedad_id' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
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
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'OtraEnfermedad' => array(
			'className' => 'OtraEnfermedad',
			'foreignKey' => 'otra_enfermedad_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
