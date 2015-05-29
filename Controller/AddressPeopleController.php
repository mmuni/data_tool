<?php
App::uses('AppController', 'Controller');
/**
 * AddressPeople Controller
 *
 * @property AddressPerson $AddressPerson
 * @property PaginatorComponent $Paginator
 */
class AddressPeopleController extends AppController {

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
		$this->AddressPerson->recursive = 0;
		$this->set('addressPeople', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->AddressPerson->exists($id)) {
			throw new NotFoundException(__('Invalid address person'));
		}
		$options = array('conditions' => array('AddressPerson.' . $this->AddressPerson->primaryKey => $id));
		$this->set('addressPerson', $this->AddressPerson->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->AddressPerson->create();
			if ($this->AddressPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The address person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address person could not be saved. Please, try again.'));
			}
		}
		$addresses = $this->AddressPerson->Address->find('list');
		$people = $this->AddressPerson->Person->find('list');
		$this->set(compact('addresses', 'people'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->AddressPerson->exists($id)) {
			throw new NotFoundException(__('Invalid address person'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->AddressPerson->save($this->request->data)) {
				$this->Session->setFlash(__('The address person has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The address person could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('AddressPerson.' . $this->AddressPerson->primaryKey => $id));
			$this->request->data = $this->AddressPerson->find('first', $options);
		}
		$addresses = $this->AddressPerson->Address->find('list');
		$people = $this->AddressPerson->Person->find('list');
		$this->set(compact('addresses', 'people'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->AddressPerson->id = $id;
		if (!$this->AddressPerson->exists()) {
			throw new NotFoundException(__('Invalid address person'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->AddressPerson->delete()) {
			$this->Session->setFlash(__('The address person has been deleted.'));
		} else {
			$this->Session->setFlash(__('The address person could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
