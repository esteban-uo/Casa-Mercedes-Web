<?php
class Image extends AppModel {
	var $name = 'Image';
	var $validate = array(
		'url' => array(
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
		'Tipoimage' => array(
			'className' => 'Tipoimage',
			'foreignKey' => 'tipoimage_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'AlbergadosImages' => array(
			'className' => 'AlbergadosImages',
			'foreignKey' => 'id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
