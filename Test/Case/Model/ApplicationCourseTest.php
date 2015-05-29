<?php
App::uses('ApplicationCourse', 'Model');

/**
 * ApplicationCourse Test Case
 *
 */
class ApplicationCourseTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.application_course',
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
		'app.course',
		'app.requirements',
		'app.department',
		'app.school',
		'app.university',
		'app.address',
		'app.address_person',
		'app.department_person',
		'app.staff_history',
		'app.applications_course',
		'app.course_programme',
		'app.course_programmes_course',
		'app.module',
		'app.courses_module',
		'app.course_type'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->ApplicationCourse = ClassRegistry::init('ApplicationCourse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->ApplicationCourse);

		parent::tearDown();
	}

}
