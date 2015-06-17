<h2>UACE</h2>
<div class="alert alert-info">
	<h3>Secondary School Leaving Examination</h3>
	<h5>Uganda Advanced Certificate of Examination (UACE) OR Equivalent</h5>
</div>

<div id="uace">
<?php 
echo $this->Form->create('Application',
  array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
  )
);

echo '<div class="control-group">';
echo $this->Form->label('Uace.relevant', null, array('class' => 'control-label')); 
echo '<div class="controls">';
echo $this->Form->checkbox('Uace.relevant', array('class'=>'form-inline'));
echo '</div>';
echo '</div>';

?>
  <div id='uace'>
    <fieldset id='relevant'>

<?php
echo $this->Form->input('Institution.1.name', array('label'=>"Examining Authority:"));

echo $this->Form->input('Institution.2.name', array('label'=>"Name of the School:"));

echo $this->Form->input('ContactDetail.post_office_box', array('label'=>"Address of the School:"));

echo $this->Form->input('AcademicHistory.year_of_completion',
  array(
    'type' => 'date',
    'empty' => false,
    'inline' => false,
    'maxYear' => date('Y') - 2,
    'minYear' => date('Y') - 90,
    'dateFormat' => 'DMY',
    'class' => '',
    'label'=>"Date of Completion:"
  )
);

echo $this->Form->input('AcademicHistory.index_number', array('label'=>"Index No:"));
?>
	
<div style="color:green;font-weight:bold;font-size:12pt">
	Subject Results (Provide Grade such as A,B ,C)
</div>
	
<table class='table'>
  <thead>
    <tr>
      <th>Subjects</th>
      <th align="right">Grade</th>
    </tr>
  </thead>

  <tbody>

<?php for ($i = 0; $i<= 4; $i = $i+1) {
  echo "<tr><td>";

  echo $this->Form->input(
    'AcademicHistoriesSubject.'.$i.'.subject_id',
    array(
      'options' => $subjects,
      'default'=>null,
      'label'=>false
    )
  );

  echo "</td><td>";

  echo $this->Form->input
    ('AcademicHistoriesSubject.'.$i.'.grade_id',
    array(
      'options' => $Agrades,
      'default'=>null,
      'label'=>false
    )
  );

  echo "</td></tr>";
}
?>
    </tbody>
  </table>
</fieldset>

<?php echo $this->element('wizard_buttons'); ?>

<?php echo $this->Form->end(); ?>
