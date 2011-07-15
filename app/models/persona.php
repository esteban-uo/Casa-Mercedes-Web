<?php
class Persona extends AppModel {
	var $name = 'Persona';
	var $virtualFields = array(
				'nombre_completo' => 'CONCAT(Persona.primer_nombre, " ", Persona.segundo_nombre, " ", Persona.primer_apellido, " ", Persona.segundo_apellido)');
	var $displayField = 'nombre_completo';
	var $validate = array(
		'primer_nombre' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Nombre está vacío, por favor ingresa el NOMBRE',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'primer_apellido' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Apellido Paterno está vacío, ingresa el primer apellido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'segundo_apellido' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Apellido Materno está vacío, ingresa el segundo apellido',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'sexo' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Sexo está vacío, Debe contener una M (si es mujer) o una H (si es hombre)',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'fecha_ingreso' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'foto_imagen_id' => array(
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Foto Imagen está vacío, llenalo por favor',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'FotoImagen' => array(
			'className' => 'Image',
			'foreignKey' => 'foto_imagen_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasMany = array(
		'Albergado' => array(
			'className' => 'Albergado',
			'foreignKey' => 'persona_id',
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
		'Dependiente' => array(
			'className' => 'Dependiente',
			'foreignKey' => 'persona_id',
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
		'Documento' => array(
			'className' => 'Documento',
			'foreignKey' => 'persona_id',
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
		'EstadosSalud' => array(
			'className' => 'EstadosSalud',
			'foreignKey' => 'persona_id',
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
			'className' => 'Nacimiento',
			'foreignKey' => 'persona_id',
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
		'Vestimenta' => array(
			'className' => 'Vestimenta',
			'foreignKey' => 'persona_id',
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
