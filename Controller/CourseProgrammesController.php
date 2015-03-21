<?php
class CourseProgrammesController extends AppController {


	public function add() {

		}

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add');
    }


}
