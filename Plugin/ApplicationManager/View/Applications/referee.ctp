</div>
<div id="welcome" class="col-md-8">
    <div id="heading">
       References 
    </div>
    
<?php
    echo $this->Form->create('');
?>
    <div class="alert alert-info">
  Please give the names of your two referees.
 </div>
    

    	<?php
    echo $this->Form->input('Referee.name.1', array('label' =>'Name of First Referee'));
    echo $this->Form->input('Referee.position.1', array('label' =>'Position of First Referee'));
    echo $this->Form->input('Referee.organisation.1', array('label' =>'Organisation of first Referee'));
    echo $this->Form->input('Referee.telephone.1', array('label' =>'Telephone of First Referee'));
    echo $this->Form->input('Referee.email.1', array('Email of First Referee '));
    echo $this->Form->input('Referee.name.2', array('label' =>'Name of Second Referee'));
    echo $this->Form->input('Referee.position.2', array('label' =>'Position of Second Referee' ));
    echo $this->Form->input('Referee.organisation.2', array('label' =>'Organisation of Second Referee'));
    echo $this->Form->input('Referee.telephone.2', array('label' =>'Telephone of Second Referee'));
    echo $this->Form->input('Referee.email.2', array('Email of Second Referee '));
	echo $this->Form->end();
	?>
<div class="submit">
		<?php echo $this->Form->submit('Continue', array('div' => false)); ?>
		<?php echo $this->Form->submit('Cancel', array('name' => 'Cancel', 'div' => false)); ?>
	</div>