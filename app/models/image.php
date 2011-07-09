<?php
class Image extends AppModel {
	var $name = 'Image';
	var $validate = array(
		'url' => array(
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
		'Tipoimage' => array(
			'className' => 'Tipoimage',
			'foreignKey' => 'tipoimage_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	var $hasMany = array(
		'PersonaImagen' => array(
			'className' => 'Persona',
			'foreignKey' => 'image_id',
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
