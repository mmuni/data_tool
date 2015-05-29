<?php
App::uses('Person', 'Model');

/**
 * Person Test Case
 *
 */
class PersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.person',
		'app.academic_history',
		'app.application',
		'app.course_type',
		'app.course',
		'app.requirements',
		'app.department',
		'app.school',
		'app.university',
		'app.address',
		'app.department_person',
		'app.staff_history',
		'app.applications_course',
		'app.course_programme',
		'app.course_programmes_course',
		'app.module',
		'app.courses_module',
		'app.career',
		'app.document',
		'app.english_proficiency',
		'app.staff_detail',
		'app.disability',
		'app.people_disability',
		'app.feedback',
		'app.people_feedback'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Person = ClassRegistry::init('Person');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Person);

		parent::tearDown();
	}

}
