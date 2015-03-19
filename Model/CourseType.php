<?php
class CourseType extends AppModel {
    public $hasMany = array(
        'course'=> array(
            'className'=>'Course',
            'foreignKey'=>'course_types'
        )
    );
}