<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 4: Courses</h2>

    <h3>Course 1</h3>
	<?php
        echo $this->Form->input('type1', array('options' => $course_types));
        echo $this->Form->input('name1',array('options' => $courses));
	?>

    <h3>Course 2</h3>
	<?php
        echo $this->Form->input('type2', array('options' => $course_types));
        echo $this->Form->input('name2',array('options' => $courses));
	?>

    <h3>Course 3</h3>
	<?php
        echo $this->Form->input('type3', array('options' => $course_types));
        echo $this->Form->input('name3',array('options' => $courses));
	?>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
