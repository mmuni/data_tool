<?php
class course_types extends AppModel {
    public $hasMany = array(
        'course'=> array(
            'className'=>'Course',
            'foreignKey'=>'course_types'
        )
    );
}