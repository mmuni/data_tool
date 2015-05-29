<?php
/**
 * ApplicationCourseFixture
 *
 */
class ApplicationCourseFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'application_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'course_id' => array('type' => 'integer', 'null' => true, 'default' => null, 'unsigned' => false),
		'course_type_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'course_programme_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1)
		),
		'tableParameters' => array('charset' => 'utf8', 'collate' => 'utf8_general_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'application_id' => 1,
			'course_id' => 1,
			'course_type_id' => 1,
			'course_programme_id' => 1
		),
	);

}
