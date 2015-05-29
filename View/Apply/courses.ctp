<h2>Courses</h2>
<?php

echo $this->Form->create('Application', array(
    'id' => 'ApplyForm',
    'url' => $this->here,
    'class' => 'form-horizontal'
));

for ($i = 0; $i < 3; $i = $i+1):

?><fieldset><legend>Choice: <?= ($i+1) ?></legend><?php

    echo $this->Form->input('ApplicationCourse.'.$i.'.course_id', array(
        'options' => $courses,
        'label' => 'Name'
    ));

    echo $this->Form->input('ApplicationCourse.'.$i.'.course_type_id', array(
        'options' => $course_types,
        'type' => 'radio',
        'class' => 'radio-inline'
    ));

    echo $this->Form->input('ApplicationCourse.'.$i.'.course_programme_id', array(
        'options' => $course_programmes,
        'type' => 'radio',
        'class' => 'radio-inline'
    ));

endfor;

echo $this->element('wizard_buttons');

echo $this->Form->end();
