<?php
class Social extends AppModel {
	var $name = 'Social';
	//The Associations below have been created with all possible keys, those that are not needed can be removed

	var $belongsTo = array(
		'Albergado' => array(
			'className' => 'Albergado',
			'foreignKey' => 'albergado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
