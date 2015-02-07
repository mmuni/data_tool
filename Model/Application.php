<?php
class Application extends AppModel{
     public $hasMany = array(
        'course'=> array(
            'className'=>'course',
            'foreignKey'=>'course_type' )); 

public $belongsTo = array(
        'course_type'=>array(
            'className'=>'course_type',
            'foreignKey'=>'course_type'));
public $hasAndBelongsToMany = array(
	'Course' =>array (
		'className'=>'Course'
		)
	);	

}


?>
