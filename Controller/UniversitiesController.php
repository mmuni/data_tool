<?php
App::uses('AppController', 'Controller');
/**
 * Universities Controller
 *
 * @property University $University
 * @property PaginatorComponent $Paginator
 */
class UniversitiesController extends AppController {

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
		$this->University->recursive = 0;
		$this->set('universities', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->University->exists($id)) {
			throw new NotFoundException(__('Invalid university'));
		}
		$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
		$this->set('university', $this->University->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->University->create();
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('The university has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university could not be saved. Please, try again.'));
			}
		}
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->University->exists($id)) {
			throw new NotFoundException(__('Invalid university'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->University->save($this->request->data)) {
				$this->Session->setFlash(__('The university has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The university could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('University.' . $this->University->primaryKey => $id));
			$this->request->data = $this->University->find('first', $options);
		}
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->University->id = $id;
		if (!$this->University->exists()) {
			throw new NotFoundException(__('Invalid university'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->University->delete()) {
			$this->Session->setFlash(__('The university has been deleted.'));
		} else {
			$this->Session->setFlash(__('The university could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
