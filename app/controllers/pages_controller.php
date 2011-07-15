<?php
class PagesController extends AppController {
	var $name = 'Pages';
	var $helpers = array('Html', 'Session');
	var $uses = array();
	
	function index() {
		$title_for_layout = "Página principal";
		$this->set(compact('title_for_layout'));
	}
	
	function acp() {
		$title_for_layout = "Panel de control del Administrador";
		$this->layout = 'panel_control';
		$this->set(compact('title_for_layout'));
	}
	
	function login() {
		$title_for_layout = "Login";
		$this->layout = 'login';
		$this->set(compact('title_for_layout'));
	}
	
}
