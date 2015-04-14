<?php
App::uses('Module', 'Model');

/**
 * Module Test Case
 *
 */
class ModuleTest extends CakeTestCase {

/**
 * Fixtures
 *
 * @var array
 */
	public $fixtures = array(
		'app.module',
		'app.course',
		'app.requirements',
		'app.department',
		'app.school',
		'app.university',
		'app.address',
		'app.person',
		'app.application',
		'app.course_type',
		'app.applications_course',
		'app.staff_detail',
		'app.department_person',
		'app.staff_history',
		'app.course_programme',
		'app.course_programmes_course',
		'app.courses_module'
	);

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->Module = ClassRegistry::init('Module');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->Module);

		parent::tearDown();
	}

}
