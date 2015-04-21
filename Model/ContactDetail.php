<?php

App::uses('AppModel', 'Model');
/**
 * ContactDetail Model
 *
 */
class ContactDetail extends AppModel {


public $validate = array(
		'phone_number' => array(
			'notEmpty' => array(
				'rule' => array('notEmpty'),
			),
			
		),		
		
		
	);
}


