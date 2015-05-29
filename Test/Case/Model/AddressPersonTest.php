<?php
App::uses('AddressPerson', 'Model');

/**
 * AddressPerson Test Case
 *
 */
class AddressPersonTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.address_person',
		'app.address',
		'app.university',
		'app.school',
		'app.department',
		'app.course',
		'app.requirements',
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
		'app.applications_course',
		'app.course_programme',
		'app.course_programmes_course',
		'app.module',
		'app.courses_module',
		'app.department_person',
		'app.staff_history'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->AddressPerson = ClassRegistry::init('AddressPerson');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->AddressPerson);

		parent::tearDown();
	}

}
