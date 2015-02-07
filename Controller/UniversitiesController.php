<?php
class UniversitiesController extends AppController {
public function index (){
$all_universities = $this->University->find('all'); 
$this->set('universities',$all_universities);
}
public function edit($id){

$university = $this->University->findById($id);

if($this->request->is(array('post', 'put'))){

$this->University->id = $id;
if ($this->University->save($this->request->data)){
$this->Session->setFlash(__('Your University is Edited'));
return $this->redirect(array('action' => 'index'));
}
$this->Session->setFlash(__('Unable to Edit University'));
}
$this->request->data = $university;

}
public function add(){
    if ($this->request->is('post')){
	$this->University->create();
	if($this->University->save($this->request->data)){
	  $this->Session->setFlash(__('Your campus is added'));
	  return $this->redirect(array('action' => 'index'));
	}
	$this->Session->setFlash(__('Unable to add Campus'));
	}

}
public function delete($id = null)
              {
                 if (!$id) {
                 $this->Session->setFlash('Invalid id for university');
                 $this->redirect(array('action' => 'index'));
                 }
                 if ($this->University->delete($id)) {
                 $this->Session->setFlash('University deleted');
                 } else {
                 $this->Session->setFlash(__('University was not deleted',
                 true));
                 }
                 $this->redirect(array('action' => 'index'));
              }

}