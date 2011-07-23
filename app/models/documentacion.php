<?php
class Documentacion extends AppModel {
	var $name = 'Documentacion';
	var $displayField = 'title';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $hasAndBelongsToMany = array(
		'Documento' => array(
			'className' => 'Documento',
			'joinTable' => 'documentaciones_documentos',
			'foreignKey' => 'documentacion_id',
			'associationForeignKey' => 'documento_id',
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
