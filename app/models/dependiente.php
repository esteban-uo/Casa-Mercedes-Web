<?php
class Dependiente extends AppModel {
	var $name = 'Dependiente';
	var $validate = array(
		'expediente' => array(
			'url' => array(
				'rule' => array('url'),
				'message' => 'El campo Expediente se debe colocar la dirección de donde está guardado el documento',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
			'minlength' => array(
				'rule' => array('minlength', 1),
				'message' => 'El campo Expediente está vacío, por favor coloca la dirección del documento',
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
		'Albergado' => array(
			'className' => 'Albergado',
			'foreignKey' => 'albergado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
