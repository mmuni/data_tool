<?php
/**
 * AddressPersonFixture
 *
 */
class AddressPersonFixture extends CakeTestFixture {

/**
 * Fields
 *
 * @var array
 */
	public $fields = array(
		'id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'primary'),
		'address_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'person_id' => array('type' => 'integer', 'null' => false, 'default' => null, 'unsigned' => false, 'key' => 'index'),
		'type' => array('type' => 'string', 'null' => false, 'default' => null, 'length' => 20, 'collate' => 'latin1_swedish_ci', 'charset' => 'latin1'),
		'created' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'modified' => array('type' => 'datetime', 'null' => false, 'default' => null),
		'deleted' => array('type' => 'boolean', 'null' => false, 'default' => null),
		'indexes' => array(
			'PRIMARY' => array('column' => 'id', 'unique' => 1),
			'address_id_2' => array('column' => array('address_id', 'person_id', 'type'), 'unique' => 1),
			'address_id_3' => array('column' => array('address_id', 'person_id'), 'unique' => 1),
			'address_id' => array('column' => 'address_id', 'unique' => 0),
			'person_id' => array('column' => 'person_id', 'unique' => 0)
		),
		'tableParameters' => array('charset' => 'latin1', 'collate' => 'latin1_swedish_ci', 'engine' => 'InnoDB')
	);

/**
 * Records
 *
 * @var array
 */
	public $records = array(
		array(
			'id' => 1,
			'address_id' => 1,
			'person_id' => 1,
			'type' => 'Lorem ipsum dolor ',
			'created' => '2015-05-27 07:55:36',
			'modified' => '2015-05-27 07:55:36',
			'deleted' => 1
		),
	);

}
