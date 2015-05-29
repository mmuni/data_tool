<?php
App::uses('ApplicationsCourse', 'Model');

/**
 * ApplicationsCourse Test Case
 *
 */
class ApplicationsCourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.applications_course',
		'app.application',
		'app.user',
		'app.person',
		'app.academic_history',
		'app.career',
		'app.document',
		'app.english_proficiency',
		'app.staff_detail',
		'app.disability',
		'app.people_disability',
		'app.feedback',
		'app.people_feedback',
		'app.application_course',
		'app.course',
		'app.requirements',
		'app.department',
		'app.school',
		'app.university',
		'app.address',
		'app.address_person',
		'app.department_person',
		'app.staff_history',
		'app.course_programme',
		'app.course_programmes_course',
		'app.module',
		'app.courses_module'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApplicationsCourse = ClassRegistry::init('ApplicationsCourse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApplicationsCourse);

		parent::tearDown();
	}

}
