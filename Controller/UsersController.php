<?php
class UsersController extends AppController {
	
	var $uses = array('Person','Role');
	
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
			
			$this->set('people', $this->Person->find('list'));
			$this->set('role', $this->Role->find('list'));
				  /* $this->loadModel('Person');
				   $people = $this->people->find('all'); //we get the course_programmes from the database
				   $this->set('people', $people);*/
			}

}