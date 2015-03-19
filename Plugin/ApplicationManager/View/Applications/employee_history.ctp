<?php echo $this->Form->create('Application', array(
    'id' => 'ApplicationForm',
    'url' => $this->here,
    'formStyle' => 'horizontal',
)); ?>
	<h2>Step 6: EMPLOYEE HISTORY</h2>


  <div class="alert alert-info">
       Employee History
 </div>
	<table class="table" id="mytable">
	<tr><th>Employer Name</th><th>Address</th><th>Phone No</th><th>Email</th><th>Position</th><th>Start Date</th><th>End date</th></tr>
	<tr id="person0" style="display:none;">
     <td><?php echo $this->Form->input('Career.company_name',array('label'=>'','type'=>'text'));?></td>
     <td><?php echo $this->Form->input('ContactDetail.post_office_box',array('label'=>'','type'=>'text'));?></td>
      <td><?php echo $this->Form->input('ContactDetail.telephone',array('label'=>'','type'=>'text'));?></td>
      <td><?php echo $this->Form->input('ContactDetail.email',array('label'=>'','type'=>'text'));?></td>
      <td><?php echo $this->Form->input('Career.position_held',array('label'=>'','type'=>'text'));?></td>
      <td><?php echo $this->Form->date('Career.date_started');?></td>
      <td><?php echo $this->Form->date('Career.date_ended');?></td>
      <td><?php echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'Click Here to remove this person')); ?></td>


        <tr id="trAdd">
      <td> <?php echo $this->Form->button('+',array('type'=>'button','title'=>'Click Here to add another history','onclick'=>'addPerson()')); ?> </td>
        </tr>
	</table>
</fieldset>
</div>

<script type='text/javascript'>
	var lastRow=0;

	function addPerson() {
                    lastRow++;
		$("#mytable tbody>tr:#person0").clone(true).attr('id','person'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		$("#person"+lastRow+" button").attr('onclick','removePerson('+lastRow+')');
		$("#person"+lastRow+" input:name").attr('name','data[Career]['+lastRow+'][company_name]').attr('id','personcompany_name'+lastRow);
		$("#person"+lastRow+" select").attr('name','data[ContactDetail]['+lastRow+'][post_office_box]').attr('id','personpost_office_box'+lastRow);
	$("#person"+lastRow+" select").attr('name','data[ContactDetail]['+lastRow+'][telephone]').attr('id','persontelephone'+lastRow);
	$("#person"+lastRow+" input:eq(2)").attr('name','data[ContactDetail]['+lastRow+'][email]').attr('id','personEmail'+lastRow);
	$("#person"+lastRow+" input:eq(1)").attr('name','data[Career]['+lastRow+'][position_held]').attr('id','personposition_held'+lastRow);
	$("#person"+lastRow+" input:eq(1)").attr('name','data[Career]['+lastRow+'][date_started]').attr('id','persondate_started'+lastRow);
	$("#person"+lastRow+" input:eq(1)").attr('name','data[Career]['+lastRow+'][date_ended]').attr('id','persondate_ended'+lastRow);


            }
	function removePerson(x) {
		$("#person"+x).remove();
	}
</script>



	<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>
<?php echo $this->Form->end(); ?>
