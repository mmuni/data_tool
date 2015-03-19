<div id="sidenav" class="col-md-2">
    <div id="sidemenu" ><h2>Menu</h2></div>


</div>
<div id="welcome" class="col-md-8">
    <div id="heading">
       Feedback 
    </div>
    
<div id="content1">
    <?php echo $this->Form->create(''); ?>
<fieldset>
<div class="alert alert-info">
 Please indicate how you got to know about this university</p>
Select what applies
 </div>


<?php
    echo $this->Form->input('feedback', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
    'Radio'=>'Radio',
	'n'=>'Newspaper',
	'o'=>'Open day',
	'b'=>'Brochures',
	'T'=>'Television',
	'P'=>'Personal Recommendation',
	'uw'=>'University Website',
	'ua'=>'University Agent',
	'us'=>'University Staff',
    )
    ) );
echo $this->form->input('Other');


    echo $this->Form->input('', array(
    'type' => 'select',
    'multiple' => 'checkbox',
    'options' => array(
    'i'=>'I declare that the information given above is correct',
	)
	) );
	
	?>
    <table>
 <tr>
 <td> 
   <div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
  </td>
  <td></td>
  <td align="right">
   
  </td>
 </tr>
 </table>
</fieldset>
    </div>