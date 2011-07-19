<?php
class UsersController extends AppController {

	var $name = 'Users';
	
	function beforeFilter() {
        parent::beforeFilter(); 
        $this->layout = "panel_control";
    }

	function index() {
		$this->User->recursive = 0;
		$this->set('users', $this->paginate());
	}
	
	function login() {
		$this->layout = "default";
		$this->Session->setFlash('Ya has iniciado sesión anteriormente');
            if ($this->Session->read('Auth.User')) {
                    $this->Session->setFlash('Ya has iniciado sesión anteriormente');
                    $this->redirect(array('controller' => 'pages', 'action' => 'index'), null, false);
            }
    }  

	function view($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		$this->set('user', $this->User->read(null, $id));
	}

	function add() {
		if (!empty($this->data)) {
			$this->User->create();
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		$grupos = $this->User->Grupo->find('list');
		$casas = $this->User->Casa->find('list');
		$this->set(compact('grupos', 'casas'));
	}

	function edit($id = null) {
		if (!$id && empty($this->data)) {
			$this->Session->setFlash(__('Invalid user', true));
			$this->redirect(array('action' => 'index'));
		}
		if (!empty($this->data)) {
			if ($this->User->save($this->data)) {
				$this->Session->setFlash(__('The user has been saved', true));
				$this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The user could not be saved. Please, try again.', true));
			}
		}
		if (empty($this->data)) {
			$this->data = $this->User->read(null, $id);
		}
		$grupos = $this->User->Grupo->find('list');
		$casas = $this->User->Casa->find('list');
		$this->set(compact('grupos', 'casas'));
	}

	function delete($id = null) {
		if (!$id) {
			$this->Session->setFlash(__('Invalid id for user', true));
			$this->redirect(array('action'=>'index'));
		}
		if ($this->User->delete($id)) {
			$this->Session->setFlash(__('User deleted', true));
			$this->redirect(array('action'=>'index'));
		}
		$this->Session->setFlash(__('User was not deleted', true));
		$this->redirect(array('action' => 'index'));
	}
}
