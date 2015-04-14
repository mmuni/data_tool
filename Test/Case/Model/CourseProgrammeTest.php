<?php
App::uses('CourseProgramme', 'Model');

/**
 * CourseProgramme Test Case
 *
 */
class CourseProgrammeTest extends CakeTestCase {

/**
 * setUp method
 *
 * @return void
 */
	public function setUp() {
		parent::setUp();
		$this->CourseProgramme = ClassRegistry::init('CourseProgramme');
	}

/**
 * tearDown method
 *
 * @return void
 */
	public function tearDown() {
		unset($this->CourseProgramme);

		parent::tearDown();
	}

}
