<?php
App::uses('AppController', 'Controller');
/**
 * ApplicationTemps Controller
 *
 * @property ApplicationTemp $ApplicationsTemp
 * @property PaginatorComponent $Paginator
 */
class ApplicationsTempsController extends AppController {

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
		$this->ApplicationsTemp->recursive = 0;
		$this->set('applicationsTemps', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->ApplicationsTemp->exists($id)) {
			throw new NotFoundException(__('Invalid applications temp'));
		}
		$options = array('conditions' => array('ApplicationsTemp.' . $this->ApplicationsTemp->primaryKey => $id));
		$this->set('applicationsTemp', $this->ApplicationsTemp->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->ApplicationsTemp->create();
			if ($this->ApplicationsTemp->save($this->request->data)) {
				$this->Session->setFlash(__('The applications temp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applications temp could not be saved. Please, try again.'));
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
		if (!$this->ApplicationsTemp->exists($id)) {
			throw new NotFoundException(__('Invalid applications temp'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->ApplicationsTemp->save($this->request->data)) {
				$this->Session->setFlash(__('The applications temp has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The applications temp could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('ApplicationsTemp.' . $this->ApplicationsTemp->primaryKey => $id));
			$this->request->data = $this->ApplicationsTemp->find('first', $options);
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
		$this->ApplicationsTemp->id = $id;
		if (!$this->ApplicationsTemp->exists()) {
			throw new NotFoundException(__('Invalid applications temp'));
		}
		$this->request->allowMethod('post', 'delete');
		if ($this->ApplicationsTemp->delete()) {
			$this->Session->setFlash(__('The applications temp has been deleted.'));
		} else {
			$this->Session->setFlash(__('The applications temp could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}
}
