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
       Add Personal Biodata 
    </div>
<div  id="personaldata">
    <?php echo $this->Form->create('Person'); ?>
    <fieldset>
       
   
        <?php
        
		echo $this->Form ->input('surname', array('label' => 'Surname/Family Name:')); //has a label element
        echo $this->Form ->input('othername', array('label' => 'Other Name(in full):')); //has a label element
		echo $this->Form ->input('year of examination', array('label' => 'Year of Examination:'));
		echo $this->Form ->input('place of birth', array('label' => 'Place of birth:')); //has a label element
		echo $this->Form ->input('fathers name', array('label' => 'Fathers Name:'));
		echo $this->Form ->input('mothers name', array('label' => 'Mothers name:')); //has a label element
		echo '<div class="radio">'.$this->Form ->radio('Gender',array('Male', 'Female')).'</div>';
		echo $this->Form ->input('DOB', array('label' => 'DOB:'));
		
	//echo $this->Form->input('Country',array('options' => $countries,'class' => 'span5','error' => array('countries' => array('wrap' => 'span', 'class' => 'label custom-inline-error label-important help-inline')) ));

		echo $this->Form ->input('religious affliation', array('label' => 'Religious Affliation:'));
		echo $this->Form ->input('marital status', array('label' => 'Marital Status:')); 
                
		echo '<div class="radio">'.$this->form->radio('Do you need accomodation?',array('YES', 'NO')).'</div>';
        ?>
    </fieldset>
    <?php 
	echo $this->Form->submit('Next >>',array("name"=> "next"));
 echo $this->Form->end();
	 ?>
</div>