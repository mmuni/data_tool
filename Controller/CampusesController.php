<?php
class CampusesController extends AppController{
public function index(){
$all_campuses = $this->Campus->find('all'); 
$this->set('campuses',$all_campuses);

}

public function edit($id){

$campus = $this->Campus->findById($id);

if($this->request->is(array('post', 'put'))){

$this->Campus->id = $id;
if ($this->Campus->save($this->request->data)){
$this->Session->setFlash(__('Your Campus is Edited'));
return $this->redirect(array('action' => 'index'));
}
$this->Session->setFlash(__('Unable to Edit Campus'));
}
$this->request->data = $campus;

}
public function add(){
    if ($this->request->is('post')){
	$this->Campus->create();
	if($this->Campus->save($this->request->data)){
	  $this->Session->setFlash(__('Your campus is added'));
	  return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Unable to add Campus'));
	}

}

}