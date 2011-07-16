<?php
class Albergado extends AppModel {
	var $name = 'Albergados';
	var $validate = array(
		'expediente' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				//'message' => 'El campo Expediente esta vacío',
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
				//'message' => 'El campo de Emparazo esta vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'cant_hijos' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'El campo debe de ser entero',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength', 1),
				//'message' => 'El campo Cantidad de hijos esta vacío',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'remitida_por' => array(
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
}
?>