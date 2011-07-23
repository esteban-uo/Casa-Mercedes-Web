<?php
class Documento extends AppModel {
	var $name = 'Documento';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Persona' => array(
			'className' => 'Persona',
			'foreignKey' => 'persona_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);

	var $hasAndBelongsToMany = array(
		'Documentacion' => array(
			'className' => 'Documentacion',
			'joinTable' => 'documentaciones_documentos',
			'foreignKey' => 'documento_id',
			'associationForeignKey' => 'documentacion_id',
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
