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
        Disability
    </div>
  
 <div id="content1">
    <?php echo $this->Form->create(''); ?>
    <fieldset>
        <div class="alert alert-info">
       Please indicate all the disabilities/Medical issues you could be having
 </div>
        <legend><?php echo __(''); ?></legend>
        <?php
		echo $this->Form->input('', array('type' => 'select','multiple' => 'checkbox','options' => $disabilities));
		echo $this->form->input('Other');
		?>
<table>
 <tr>
 <td> 
   <?php
      echo $this->Form->submit('<< Back',array("name"=> "back"));
 	?>
  </td>
  <td></td>
  <td align="right">
   <?php
     echo $this->Form->submit('Next >>',array("name"=> "next"));
	  echo $this->Form->end();
   ?>
  </td>
 </tr>
 </table>
</fieldset>

</div>
<div id="content1">