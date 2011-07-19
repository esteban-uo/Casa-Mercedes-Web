<?php
class AlbergadosController extends AppController {

	var $name = 'Albergados';
        var $helpers = array('Html','Form');

	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }
	
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
                        $this->Albergado->set($this->data);
                        if($this->Albergado->validates()){
                            $this->Albergado->create();
                            echo "
        <script type='text/javaScript'>
        alert(\"$this->data\");
           //status es el contenido del error
        </script>";
                            if ($this->Albergado->save($this->data)) {
                            	$this->Session->setFlash(__('The albergado has been saved', true));
                                    if (!$this->RequestHandler->isAjax()) {
                                            $this->redirect(array('action' => 'index'));
                                    }
                                    $this->set('closeModalbox', true);
                            } else {
                                    $Albergado = $this->Albergado->invalidFields;
                                    $data = compact('Albergado');
                                    $this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
                                    $this->set('errors', compact('message','data'));
                            }
                        }else{
                            $Albergado = $this->Albergado->invalidFields;
                            $data = compact('Albergado');
                            $this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
                            $this->set('errors', compact('message','data'));
                        }
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$fotoImagens = $this->Albergado->FotoImagen->find('list');
		$this->set(compact('personas', 'casas', 'fotoImagens'));
	}
        
       	function edit($id = null) {
            $this->set('closeModalbox', false);
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid albergado', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
                    if($this->Albergado->validates()){
			if ($this->Albergado->save($this->data)) {
				$this->Session->setFlash(__('The albergado has been saved', true));
                                if(!$this->RequestHandler->isAjax()){
                                    $this->redirect(array('action' => 'index'));
                                }
                                $this->set('closeModalbox', true);

			} else {
				$this->Session->setFlash(__('The albergado could not be saved. Please, try again.', true));
			}
                    }
		}
		if (empty($this->data)) {
			$this->data = $this->Albergado->read(null, $id);
		}
		$personas = $this->Albergado->Persona->find('list');
		$casas = $this->Albergado->Casa->find('list');
		$fotoImagens = $this->Albergado->FotoImagen->find('list');
		$this->set(compact('personas', 'casas', 'fotoImagens'));
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
