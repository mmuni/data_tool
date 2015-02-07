<div id="sidenav" class="col-md-2">
    <div id="sidemenu" ><h2>Menu</h2></div>
<ul>
<li></li>
<li><?php echo $this->Html->link(__('Home'), array('action' => 'index'));?></li>
<li><?php echo $this->Html->link(__('Personal Data'), array('action' => 'personalbiodata'));?></li>
<li><?php echo $this->Html->link(__('Address'), array('action' => 'addresses'));?></li>
<li><?php echo $this->Html->link(__('Courses'), array('action' => 'courses'));?></li>
<li><?php echo $this->Html->link(__('UACE'), array('action' => 'uace'));?></li>
<li><?php echo $this->Html->link(__('UCE'), array('action' => 'uce'));?></li>
<li><?php echo $this->Html->link(__('Academic Qualifications'), array('action' => 'academicqualification'));?></li>
<li><?php echo $this->Html->link(__('Employee History'), array('action' => ''));?></li>
<li><?php echo $this->Html->link(__('Career'), array('action' => 'career'));?></li>
<li><?php echo $this->Html->link(__('English proficiency'), array('action' => 'english_proficiency'));?></li>
<li><?php echo $this->Html->link(__('Disabilities'), array('action' => 'disability'));?></li>
<li><?php echo $this->Html->link(__('References'), array('action' => 'referee'));?></li>
<li><?php echo $this->Html->link(__('Feed Back'), array('action' => 'feedback'));?></li>
</ul>

</div>
<div id="welcome" class="col-md-8">
    <div id="heading">
      Employee History  
    </div>
<div >
<?php echo $this->Form ->create('Career');?>
<fieldset>
	
         <div class="alert alert-info">
       Employee History
 </div>
	<table id="mytable">
	<tr><th>Employer Name</th><th>Address</th><th>Phone No</th><th>Email</th><th>Position</th><th>Start Date</th><th>End date</th></tr>
	<tr id="person0" style="display:none;">  
            <td><?php echo $this->Form->button('&nbsp;-&nbsp;',array('type'=>'button','title'=>'Click Here to remove this person')); ?></td>
            <td><?php echo $this->Form->input('unused.uid',array('label'=>'','type'=>'text'));?></td>
            <td><?php echo $this->Form->input('unused.phone_number',array('label'=>'','type'=>'text'));?></td>
            <td><?php echo $this->Form->input('unused.code',array('label'=>'','type'=>'text'));?></td>
            <td><?php echo $this->Form->input('unused.date_started',array('label'=>'','type'=>'text'));?></td>
            <td><?php echo $this->Form->input('unused.date_ended',array('label'=>'','type'=>'text'));?></td>
            <td><?php echo $this->Form->input('unused.person_id',array('label'=>'','type'=>'text'));?></td>
        <tr id="trAdd">
            <td> <?php echo $this->Form->button('+',array('type'=>'button','title'=>'Click Here to add another person','onclick'=>'addPerson()')); ?> </td>
        </tr>
	<tr><td><?php echo $this->Form->submit('<< Back',array("name"=> "back"));?></td>
            <td align="right"><?php echo $this->Form->submit('Next >>',array("name"=> "next"));
            echo $this->Form->end();?></td></tr></table>
</fieldset>
</div>
<?php
//    echo $this->Form->submit('back',array("name"=> "back"));
//    echo $this->Form->submit('next',array("name"=> "next"));
//    echo $this->Form->end();  
 ?>

<?php echo $this->Html->script(array('jquery-1.6.4.min'));?>
<script type='text/javascript'>
	var lastRow=0;
	
	function addPerson() {
                    lastRow++;
               
		$("#mytable tbody>tr:#person0").clone(true).attr('id','person'+lastRow).removeAttr('style').insertBefore("#mytable tbody>tr:#trAdd");
		$("#person"+lastRow+" button").attr('onclick','removePerson('+lastRow+')');
		$("#person"+lastRow+" input:first").attr('name','data[Person]['+lastRow+'][lastName]').attr('id','personLastName'+lastRow);
		$("#person"+lastRow+" input:eq(1)").attr('name','data[Person]['+lastRow+'][firstName]').attr('id','personFirstName'+lastRow);
		$("#person"+lastRow+" input:eq(2)").attr('name','data[Person]['+lastRow+'][email]').attr('id','personEmail'+lastRow);
		$("#person"+lastRow+" select").attr('name','data[Person]['+lastRow+'][gender]').attr('id','personGender'+lastRow);
                
            }
	function removePerson(x) {
		$("#person"+x).remove();
	}
</script>