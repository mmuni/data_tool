<?php
App::uses('AppController', 'Controller');
/**
 * Applications Controller
 *
 * @property Application $Application
 * @property PaginatorComponent $Paginator
 */
class ApplicationsController extends AppController {

/**
 * Components
 *
 * @var array
 */
	public $components = array('Paginator');

/**
 * index method
 *
 * @return void
 */
	public function index() {
		$this->Application->recursive = 0;
		$this->set('applications', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
		$this->set('application', $this->Application->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Application->create();
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		}
		$users = $this->Application->User->find('list');
		$people = $this->Application->Person->find('list');
		$courses = $this->Application->Course->find('list');
		$this->set(compact('users', 'people', 'courses'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Application->exists($id)) {
			throw new NotFoundException(__('Invalid application'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Application->save($this->request->data)) {
				$this->Session->setFlash(__('The application has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The application could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Application.' . $this->Application->primaryKey => $id));
			$this->request->data = $this->Application->find('first', $options);
		}
		$users = $this->Application->User->find('list');
		$people = $this->Application->Person->find('list');
		$courses = $this->Application->Course->find('list');
		$this->set(compact('users', 'people', 'courses'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Application->id = $id;
		if (!$this->Application->exists()) {
			throw new NotFoundException(__('Invalid application'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Application->delete()) {
			$this->Session->setFlash(__('The application has been deleted.'));
		} else {
			$this->Session->setFlash(__('The application could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
