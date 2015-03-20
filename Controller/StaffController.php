<?php
class StaffController extends AppController {

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function add(){

    }

}
