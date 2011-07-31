<?php
class OtraEnfermedad extends AppModel {
	var $name = 'OtraEnfermedad';
	var $displayField = 'enfermedad';
	var $validate = array(
		'enfermedad' => array(
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
}
