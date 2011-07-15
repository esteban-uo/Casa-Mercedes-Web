<?php
class Dependiente extends AppModel {
	var $name = 'Dependiente';
	var $validate = array(
		'expediente' => array(
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
		'Albergado' => array(
			'className' => 'Albergado',
			'foreignKey' => 'albergado_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
	
	function afterFind($results) {
		foreach ($results as $key => $val) {
			$persona = $this->requestAction(
							array(
								'controller' => 'personas',
								'action' => 'buscarPersonaPorid',
								'named' => array('persona_id' => $results[$key]['Dependiente']['persona_id'])
							)
				);
				
				App::import('model','Attribute');
			//Debug($persona);
			//$results[$key]['Dependiente']['nombre_completo_persona'] = $results[$key]['Persona']['primer_nombre'].' '. $results[$key]['Persona']['segundo_nombre'].' '.$results[$key]['Persona']['primer_apellido'].' '.$results[$key]['Persona']['segundo_apellido']; 
        }
		return $results;
	}
}
