<?php
class courses extends AppModel {
	public $belongsTo = array(
        'course_types'=>array(
            'className'=>'course_types',
            'foreignKey'=>'course_types'
        )
    );


	public $hasAndBelongsToMany = array(
	'course_programmes' =>array (
		'className'=>'course_programmes',
        'joinTable'=>'course_programmes_courses',
        'foreignKey'=>'course',
        'associationForeignKey'=> 'course_programme'
		),
        'Module'=> array(
            'className'=>'Module',
            'joinTable'=>'courses_modules',
            'foreignKey'=>'course_id',
            'associationForeignKey' => 'module_id'
        ),
        'Application'=> array(
            'className'=> 'Application',
            'joinTable'=> 'application_courses',
            'foreignKey'=> 'course_id',
            'associationForeignKey'=> 'application_id'

    )

	);

    public $validate = array(
      'name'=>'required',

    );


	
}