<?php
App::uses('AppController', 'Controller');
class UsersController extends AppController {
    var $uses = array('User','Person','Role');
    public $components = array('Paginator');

    public function beforeFilter() {
        parent::beforeFilter();
        // Allow users to register and logout.
        $this->Auth->allow('add', 'logout');

    }

    public function index() {
        $this->set('users', $this->Paginator->paginate());
    }

    public function dashboard(){
    }

    public function login() {

        // if we get the post information, try to authenticate
        if ($this->request->is('post')) {
            if ($this->Auth->login()) {
                $this->Session->setFlash(__('Welcome, '. $this->Auth->user('username')));
		// Redirect to wherever the user was going before being forced to login
                $this->redirect($this->Auth->redirectUrl());
            } else {
                $this->Session->setFlash(__('Invalid username or password'));
            }
        }
    }

    public function add() {
        $this->set('people', $this->Person->find('list'));
        if ($this->request->is('post')) {

            $this->User->create();
            if ($this->User->save($this->request->data)) {
                $this->Session->setFlash(__('The user has been created'));
                $this->redirect(array('action' => 'login'));
            } else {
                $this->Session->setFlash(__('The user could not be created. Please, try again.'));
            }
        }
    }

    public function logout() {
        return $this->redirect($this->Auth->logout());
    }

}

