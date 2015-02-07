<?php
App::uses('AppController', 'Controller');
/**
 * EnglishProficiencies Controller
 *
 * @property EnglishProficiency $EnglishProficiency
 * @property PaginatorComponent $Paginator
 */
class english_proficienciesController extends AppController {

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
		$this->English_proficiencies->recursive = 0;
		$this->set('english_proficiencies', $this->Paginator->paginate());
	}

/**
 * view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function view($id = null) {
		if (!$this->English_proficiencies->exists($id)) {
			throw new NotFoundException(__('Invalid english proficiency'));
		}
		$options = array('conditions' => array('EnglishProficiency.' . $this->English_proficiencies->primaryKey => $id));
		$this->set('englishProficiency', $this->English_proficiencies->find('first', $options));
	}

/**
 * add method
 *
 * @return void
 */
	public function add() {
		if ($this->request->is('post')) {
			$this->EnglishProficiency->create();
			if ($this->EnglishProficiency->save($this->request->data)) {
				$this->Session->setFlash(__('The english proficiency has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The english proficiency could not be saved. Please, try again.'));
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
		if (!$this->EnglishProficiency->exists($id)) {
			throw new NotFoundException(__('Invalid english proficiency'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EnglishProficiency->save($this->request->data)) {
				$this->Session->setFlash(__('The english proficiency has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The english proficiency could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EnglishProficiency.' . $this->EnglishProficiency->primaryKey => $id));
			$this->request->data = $this->EnglishProficiency->find('first', $options);
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
		$this->EnglishProficiency->id = $id;
		if (!$this->EnglishProficiency->exists()) {
			throw new NotFoundException(__('Invalid english proficiency'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EnglishProficiency->delete()) {
			$this->Session->setFlash(__('The english proficiency has been deleted.'));
		} else {
			$this->Session->setFlash(__('The english proficiency could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}

/**
 * admin_index method
 *
 * @return void
 */
	public function admin_index() {
		$this->EnglishProficiency->recursive = 0;
		$this->set('englishProficiencies', $this->Paginator->paginate());
	}

/**
 * admin_view method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_view($id = null) {
		if (!$this->EnglishProficiency->exists($id)) {
			throw new NotFoundException(__('Invalid english proficiency'));
		}
		$options = array('conditions' => array('EnglishProficiency.' . $this->EnglishProficiency->primaryKey => $id));
		$this->set('englishProficiency', $this->EnglishProficiency->find('first', $options));
	}

/**
 * admin_add method
 *
 * @return void
 */
	public function admin_add() {
		if ($this->request->is('post')) {
			$this->EnglishProficiency->create();
			if ($this->EnglishProficiency->save($this->request->data)) {
				$this->Session->setFlash(__('The english proficiency has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The english proficiency could not be saved. Please, try again.'));
			}
		}
	}

/**
 * admin_edit method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_edit($id = null) {
		if (!$this->EnglishProficiency->exists($id)) {
			throw new NotFoundException(__('Invalid english proficiency'));
		}
		if ($this->request->is(array('post', 'put'))) {
			if ($this->EnglishProficiency->save($this->request->data)) {
				$this->Session->setFlash(__('The english proficiency has been saved.'));
				return $this->redirect(array('action' => 'index'));
			} else {
				$this->Session->setFlash(__('The english proficiency could not be saved. Please, try again.'));
			}
		} else {
			$options = array('conditions' => array('EnglishProficiency.' . $this->EnglishProficiency->primaryKey => $id));
			$this->request->data = $this->EnglishProficiency->find('first', $options);
		}
	}

/**
 * admin_delete method
 *
 * @throws NotFoundException
 * @param string $id
 * @return void
 */
	public function admin_delete($id = null) {
		$this->EnglishProficiency->id = $id;
		if (!$this->EnglishProficiency->exists()) {
			throw new NotFoundException(__('Invalid english proficiency'));
		}
		$this->request->onlyAllow('post', 'delete');
		if ($this->EnglishProficiency->delete()) {
			$this->Session->setFlash(__('The english proficiency has been deleted.'));
		} else {
			$this->Session->setFlash(__('The english proficiency could not be deleted. Please, try again.'));
		}
		return $this->redirect(array('action' => 'index'));
	}}
