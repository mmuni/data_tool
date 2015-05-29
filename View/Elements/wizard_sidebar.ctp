<?php

$titles = array(
	'index' => 'Basics',
	'biodata' => 'Biographical Details',
	'address' => 'Applicant Address',
    'courses' => 'Select Courses',
    'review' => 'Review Entered Data'
);

echo "<div class='list-group'>";
echo $this->Wizard->progressMenu($titles, array('wrap' => ''), array('class'=>"list-group-item"));
echo "</div>";

?>
