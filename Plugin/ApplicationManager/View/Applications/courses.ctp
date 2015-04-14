<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 4: Courses</h2>
  <div id="c">
  	<div id="coursesList">

	  <?php for ($i = 0; $i < 3; $i = $i+1): ?>
	  <fieldset>
		<legend>Choice: <?= ($i+1) ?></legend>
	  <?php
        echo $this->Form->input('ApplicationsCourses.'.$i.'.type', array(
          'options' => $course_types,
          'label' => false,
        ));

        echo $this->Form->input('ApplicationsCourses.'.$i.'.name', array(
          'options' => $courses,
          'label' => false
        ));

        echo $this->Form->input('ApplicationsCourses.'.$i.'.programme', array(
          'options' => $course_programmes,
          'label' => false,
        ));


      ?>

	  <?php endfor ?>
  	</div>
  </div>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
