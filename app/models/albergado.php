<?php
class albergado extends AppModel {
	var $name = 'albergado';
	var $validate = array(
		'expediente' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Expediente está vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_ingreso' => array(
			'date' => array(
				'rule' => array('date'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'embarazo_actual' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo de Emparazo está vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cant_hijos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				'message' => 'El campo debe de ser entero',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Cantidad de hijos está vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'remitida_por' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'Este campo está vacío debe de contener mínimo 1 carácter',
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
		'Casa' => array(
			'className' => 'Casa',
			'foreignKey' => 'casa_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'FotoImagen' => array(
			'className' => 'Image',
			'foreignKey' => 'familiograma_imagen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasOne = array(
		'Institucion' => array(
			'className' => 'Institucion',
			'foreignKey' => 'albergado_id',
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
		'Familia' => array(
			'className' => 'Familia',
			'foreignKey' => 'albergado_id',
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
		'Social' => array(
			'className' => 'Social',
			'foreignKey' => 'albergado_id',
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
		'SocioEconomico' => array(
			'className' => 'SocioEconomico',
			'foreignKey' => 'albergado_id',
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
		'Problematica' => array(
			'className' => 'Problematica',
			'foreignKey' => 'albergado_id',
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
		'Dato' => array(
			'className' => 'Dato',
			'foreignKey' => 'albergado_id',
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
		'DatosAlbergado' => array(
			'className' => 'DatosAlbergado',
			'foreignKey' => 'albergado_id',
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

	var $hasMany = array(
		'Dependiente' => array(
			'className' => 'Dependiente',
			'foreignKey' => 'albergado_id',
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
		'Escolaridad' => array(
			'className' => 'Escolaridad',
			'foreignKey' => 'albergado_id',
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
	
	var $hasAndBelongsToMany = array(
		'Ingreso' => array(
			'className' => 'Ingreso',
			'joinTable' => 'albergados_ingresos',
			'foreignKey' => 'albergado_id',
			'associationForeignKey' => 'ingreso_id',
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