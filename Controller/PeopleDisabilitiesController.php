<?php
class PeopleDisabilitiesController extends AppController {


	public function add() {

		}

    public function beforeFilter(){
        parent::beforeFilter();
        $this->Auth->allow('add');
    }

    public function add(){

    }


}
