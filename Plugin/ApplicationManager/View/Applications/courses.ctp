<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 4: Courses</h2>

  <div id="c">
  	<div id="coursesList">
      <?php
        echo "Course ";

        echo $this->Form->input('ApplicationCourse.type', array(
          'options' => $course_types,
          'label' => false,
        ));

        echo $this->Form->input('ApplicationCourse.name', array(
          'options' => $courses,
          'label' => false
        ));

        echo $this->Form->input('ApplicationCourse.programme', array(
          'options' => $course_programmes,
          'label' => false,
        ));
		
        echo "<button type='btn btn-info' id='addCourseBtn'><i class='glyphicon glyphicon-plus'></i> Add Course</button>";
		echo "<button type='btn btn-info' id='addCourseBtn'><i class='glyphicon glyphicon-minus'></i> Remove Course</button>";
      ?>
  	</div>
  </div>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>

<script type='text/javascript'>
	var lastRow=0;

  function addPerson() {
    lastRow++;
    var c = $("#coursesList").clone(true)
    c.attr('id','cousesList'+lastRow);

    c.find('');
    console.log(c);

    $('#c').append(c);
  }

  function removePerson(x) {
    $("#person"+x).remove();
  }

  $(document).ready(function(){
    $('#addCourseBtn').click(function(e){
      e.preventDefault();
      addPerson();
    });

  });
</script>
