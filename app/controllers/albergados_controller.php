<?php
class AlbergadosController extends AppController {

	var $name = 'Albergados';
        var $helpers = array('Html','Form');

	function index() {
		$this->Albergado->recursive = 0;
		$this->set('albergados', $this->paginate());
	}
        
	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('albergado', $this->Albergado->read(null, $id));
	}

	function add() {
            $this->set('closeModalbox', false);
		if (!empty($this->data)) {
			$this->Albergado->create();
                        if($this->Albergado->validates()){
                            if ($this->Albergado->save($this->data)) {
                            	$this->Session->setFlash(__('The albergado has been saved', true));
                                    if (! $this->RequestHandler->isAjax()) {
                                            $this->redirect(array('action' => 'index'));
                                    }
                                    $this->set('closeModalbox', true);
                            } else {
                                    $Albergado = $this->Albergado->invalidFields;
                                    $data = compact('Albergado');
                                    $this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
                                    $this->set('errors', compact('message','data'));
                            }
                        }
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$this->set(compact('personas', 'casas'));
	}
        
        function ajax_add(){
             // Ajax validation of single fields, check if xml is asked
            if ($this->RequestHandler->ext =='xml') {
                // If we have data, process it. If not send back an error.
                if(!empty($this->data['Albergado'])){
                    $this->cleanUpFields();
                    // Validate the albergado, if it's ok, show no errors. If not ok, show errors
                    if ($this->Albergado->create($this->data['Albergado']) && $this->Albergado->validates()) {
                        $this->set('error', '0');
                        $this->set('message', '');
                    } else {
                        $errorMessages = $this->validateErrors($this->Albergado);
                        $this->set('error', '1');
                        $this->set('message', array_shift($errorMessages));
                    }
                } else {
                    $this->set('error', '1');
                    $this->set('message', 'No data sent');
                }
            } else {
                // Normal validation and save
                if(!empty($this->data)) {
                    $this->cleanUpFields();
                    $this->Customer->create($this->data);
                    if($this->Customer->save($this->data)) {
                        $this->redirect(array('action'=>'index'));
                    } else {
                        $this->Session->setFlash('Favor de checar la información en los campos...');
                    }
                }
            }
        }

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('The albergado has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->Albergado->read(null, $id);
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$this->set(compact('personas', 'casas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for albergado', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->Albergado->delete($id)) {
			$this->Session->setFlash(__('Albergado deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('Albergado was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
