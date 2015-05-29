<?php
App::uses('Address', 'Model');

/**
 * Address Test Case
 *
 */
class AddressTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.address',
		'app.university',
		'app.school',
		'app.department',
		'app.course',
		'app.requirements',
		'app.application',
		'app.course_type',
		'app.applications_course',
		'app.course_programme',
		'app.course_programmes_course',
		'app.module',
		'app.courses_module',
		'app.department_person',
		'app.staff_history',
		'app.address_person'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Address = ClassRegistry::init('Address');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Address);

		parent::tearDown();
	}

}
