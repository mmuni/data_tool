<?php
class UsersController extends AppController {
	
	public function beforeFilter() {
	parent::beforeFilter();
          // Allow users to register and logout.
               $this->Auth->allow('add', 'logout');
              }
			  
    public function login() {
              if ($this->request->is('dashboard')) {
					  if ($this->Auth->login()) {
                
					  return $this->redirect($this->Auth->redirect());
					  
				}
				$this->Session->setFlash(__('Invalid username or password, try again'));
         }
	}

		public function add() {
				   $this->loadModel('Person');
				   $people = $this->people->find('all'); //we get the course_programmes from the database
				   $this->set('people', $people);
			}

}