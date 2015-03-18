<?php
App::uses('AppModel', 'Model');
/**
 * Person Model
 *
 * @property Application $Application
 * @property StaffDetail $StaffDetail
 * @property University $University
 * @property AcademicHistory $AcademicHistory
 * @property AddressPerson $AddressPerson
 * @property Career $Career
 * @property ContactDetail $ContactDetail
 * @property Document $Document
 * @property EnglishProficiency $EnglishProficiency
 */
class Role extends AppModel {
	
	public $displayField = 'name';

}
?>