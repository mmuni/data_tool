<?php
App::uses('AppController', 'Controller');
/**
 * Dashboards Controller
 *
 * @property Dashboard $Dashboard
 * @property PaginatorComponent $Paginator
 */
class DashboardsController extends AppController {

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
		$this->Dashboard->recursive = 0;
		$this->set('dashboards', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->Dashboard->exists($id)) {
			throw new NotFoundException(__('Invalid dashboard'));
		}
		$options = array('conditions' => array('Dashboard.' . $this->Dashboard->primaryKey => $id));
		$this->set('dashboard', $this->Dashboard->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->Dashboard->create();
			if ($this->Dashboard->save($this->request->data)) {
				$this->Session->setFlash(__('The dashboard has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dashboard could not be saved. Please, try again.'));
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
		if (!$this->Dashboard->exists($id)) {
			throw new NotFoundException(__('Invalid dashboard'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->Dashboard->save($this->request->data)) {
				$this->Session->setFlash(__('The dashboard has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The dashboard could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('Dashboard.' . $this->Dashboard->primaryKey => $id));
			$this->request->data = $this->Dashboard->find('first', $options);
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
		$this->Dashboard->id = $id;
		if (!$this->Dashboard->exists()) {
			throw new NotFoundException(__('Invalid dashboard'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->Dashboard->delete()) {
			$this->Session->setFlash(__('The dashboard has been deleted.'));
		} else {
			$this->Session->setFlash(__('The dashboard could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
