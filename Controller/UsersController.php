<?php
class UsersController extends AppController {
	var $uses = array('Person','User');




public function login() {

	}
	public function add() {
	
	$this->set('people', $this->Person->find('list'));
	$this->set('user', $this->User->find('list'));

	}
	
}