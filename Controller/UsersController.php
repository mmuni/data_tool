<?php
class UsersController extends AppController {
var $uses = array('Person');

public function add() {
	
	$this->set('people', $this->Person->find('list'));

	}
public function login() {

	}


	

}