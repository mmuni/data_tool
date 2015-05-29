<?php
App::uses('AppModel', 'Model');
/**
 * ApplicationCourse Model
 *
 * @property Application $Application
 * @property Course $Course
 * @property CourseType $CourseType
 * @property CourseProgramme $CourseProgramme
 */
class ApplicationCourse extends AppModel {

/**
 * Validation rules
 *
 * @var array
 */
	public $validate = array(
		'course_type_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
		'course_programme_id' => array(
			'numeric' => array(
				'rule' => array('numeric'),
				//'message' => 'Your custom message here',
				//'allowEmpty' => false,
				//'required' => false,
				//'last' => false, // Stop validation after this rule
				//'on' => 'create', // Limit validation to 'create' or 'update' operations
			),
		),
	);

	//The Associations below have been created with all possible keys, those that are not needed can be removed

/**
 * belongsTo associations
 *
 * @var array
 */
	public $belongsTo = array(
		'Application' => array(
			'className' => 'Application',
			'foreignKey' => 'application_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'Course' => array(
			'className' => 'Course',
			'foreignKey' => 'course_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CourseType' => array(
			'className' => 'CourseType',
			'foreignKey' => 'course_type_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		),
		'CourseProgramme' => array(
			'className' => 'CourseProgramme',
			'foreignKey' => 'course_programme_id',
			'conditions' => '',
			'fields' => '',
			'order' => ''
		)
	);
}
