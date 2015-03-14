<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 4: Courses</h2>

	<?php for ($i=0; $i<4; $i++){
      echo "<h3>Course " . ($i+1) . "</h3>";
      echo $this->Form->input('course_type'. $i, array(
        'options' => $course_types,
        'label' => 'Course Type'
      ));

      echo $this->Form->input('course_name'. $i, array(
        'options' => $courses,
        'label' => 'Course Name'
      ));
    }
	?>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
