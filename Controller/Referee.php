<?php
App::uses('AppController', 'Controller');
/**
 * People Controller
 *
 * @property Reference $Reference
 * @property PaginatorComponent $Paginator
 */
class ReferenceController extends AppController {

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
		$this->Reference->recursive = 0;
		$this->set('people', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid Reference'));
		}
		$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
		$this->set('Reference', $this->Reference->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Reference->create();
			if ($this->Reference->save($this->request->data)) {
				$this->Session->setFlash(__('The Reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Reference could not be saved. Please, try again.'));
			}
		}
		$universities = $this->Reference->University->find('list');
		$this->set(compact('universities'));
	}

/**
 * edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function edit($id = null) {
		if (!$this->Reference->exists($id)) {
			throw new NotFoundException(__('Invalid Reference'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Reference->save($this->request->data)) {
				$this->Session->setFlash(__('The Reference has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The Reference could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Reference.' . $this->Reference->primaryKey => $id));
			$this->request->data = $this->Reference->find('first', $options);
		}
		$universities = $this->Reference->University->find('list');
		$this->set(compact('universities'));
	}

/**
 * delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function delete($id = null) {
		$this->Reference->id = $id;
		if (!$this->Reference->exists()) {
			throw new NotFoundException(__('Invalid Reference'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->Reference->delete()) {
			$this->Session->setFlash(__('The Reference has been deleted.'));
		} else {
			$this->Session->setFlash(__('The Reference could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
