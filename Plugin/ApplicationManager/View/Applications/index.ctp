<?php echo $this-> Form->create('Application', array('url' => $this->here)); ?>

<div class="page-header">
  <h2>New Application</h2>
  <p>This code is unique to your application. Please save it for later, so you can resume your application at a later stage</p>
</div>

<div class="row">
    <div class="col-md-6">
        <?php echo $this->Form->input('Application.code', array('value' => $code, 'label' => 'Application specific code')); ?>
        <?php echo $this->Form->submit('Start', array('div' => false, 'class' => 'btn btn-primary')); ?>
    </div>
</div>
<?php echo $this->Form->end(); ?>
