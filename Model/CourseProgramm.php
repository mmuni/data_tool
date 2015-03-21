<?php
class CourseProgramm extends AppModel {
	public $hasMany = array(
	'course_programmes' =>array (
		'className'=>'course_programmes'
		)
	);
}