 <?php

$links = array(
	$this->Html->link('Basics', 'wizard/index'),
	$this->Html->link('Biodata', 'wizard/biodata'),
	$this->Html->link('Address', 'wizard/address'),
	$this->Html->link('Courses', 'wizard/courses'),
	$this->Html->link('UACE', 'wizard/uace'),
	$this->Html->link('UCE', 'wizard/uce'),
	$this->Html->link('Academic History', 'wizard/academic_history'),
	$this->Html->link('Employee_history', 'wizard/employee_history'),
	$this->Html->link('English Proficiency', 'wizard/english_proficiency'),
	$this->Html->link('Disability', 'wizard/disabilities'),
	$this->Html->link('Refrees', 'wizard/referee'),
	$this->Html->link('Feedback', 'wizard/feedback'),
	$this->Html->link('Review', 'wizard/review'),
	$this->Html->link('Submit', 'wizard/finish'),
);

echo $this->Html->nestedList($links);

?>
