<?php echo $this-> Form->create('Application', array('url' => $this->here)); ?>

<div class="page-header">
  <h2>Sign In or Create Account</h2>
   Sign in with your previously created account to take full advantage of all the features.
</div>


	<div class="row">
		<div class="col-md-6">
			<h2>Returning Applicant</h2>
			<?php echo $this->Form->input('Person.phone_number'); ?>
			<?php echo $this->Form->input('Application.code'); ?>
			<?php echo $this->Form->submit('Login', array('div' => false, 'class' => 'btn')); ?>
		</div>

		<div class="col-md-6">
			<h2>New Applicant</h2>
			<?php echo $this->Form->input('Person.firstname'); ?>
			<?php echo $this->Form->input('Person.lastname'); ?>
			<?php echo $this->Form->input('Person.phone_number'); ?>
			<?php echo $this->Form->input('Person.email'); ?>

			<?php echo $this->Form->submit('Create', array('div' => false, 'class' => 'btn')); ?>
		</div>
	</div>
<?php echo $this->Form->end(); ?>
