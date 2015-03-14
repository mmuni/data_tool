<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
)); ?>
	<h2>Step 4: Courses</h2>

  <table class="table table-bordered">

    <tr>
      <th>Course</th>
      <th>Type</th>
      <th>Name</th>
      <th>Programme</th>
      <th>&nbsp;</th>
    </tr>

	<?php for ($i=0; $i<4; $i++) {
      echo "<tr>";

      echo "<td>Course " . ($i+1) . "</td>";

      echo "<td>";
      echo $this->Form->input('Course.type'. $i, array(
        'options' => $course_types,
        'label' => false,
      ));
      echo "</td>";

      echo "<td>";
      echo $this->Form->input('Course.name'. $i, array(
        'options' => $courses,
        'label' => false
      ));
      echo "</td>";

      echo "<td>";
      echo $this->Form->input('Course.programme'. $i, array(
        'options' => $course_programmes,
        'label' => false,
      ));
      echo "</td>";

      echo "<td><i class='glyphicon glyphicon-plus'></i></td>";

      echo "</tr>";
    }
	?>
  </table>

	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
