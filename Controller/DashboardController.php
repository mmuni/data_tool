<?php
App::uses('AppController', 'Controller');
/**
 
 *
 * @property Person $Person
 * @property PaginatorComponent $Paginator
 */
class DashboardController extends AppController {

public function index(){}

public function beforeFilter() {
parent::beforeFilter();
$this->Auth->allow('*');
}


}
?>