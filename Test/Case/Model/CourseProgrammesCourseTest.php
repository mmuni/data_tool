<?php
App::uses('CourseProgrammesCourse', 'Model');

/**
 * CourseProgrammesCourse Test Case
 *
 */
class CourseProgrammesCourseTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseProgrammesCourse = ClassRegistry::init('CourseProgrammesCourse');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseProgrammesCourse);

		parent::tearDown();
	}

}
