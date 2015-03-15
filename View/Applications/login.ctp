7
    <div id="login">
        <div class="ch-container">
    <div class="row">
        
    <div class="row">
        <div class="col-md-12 center login-header">
            <h3>Welcome to MMU on-line Application </h3>
        </div>
        <!--/span-->
    </div><!--/row-->

    <div class="row">
        <div class="well col-md-7 center login-box">
            <div class="alert alert-info">
                Please login with your Username and Password.
            </div>

    <?php echo $this->Form->create('Person'); ?>
    <fieldset>
        <legend><?php echo __('LOGIN'); ?></legend>
        <?php
        echo '<div class="input-group input-group-lg"><span class="input-group-addon">
            <i class="glyphicon glyphicon-user red"></i></span>'.$this->Form ->input('telephone', array('label' =>FALSE,'class'=>'form-control','placeholder'=>'Telephone')).'</div>
                    <div class="clearfix"></div><br>'; //has a label element
        echo '<div class="input-group input-group-lg">
                        <span class="input-group-addon"><i class="glyphicon glyphicon-lock red"></i></span>'.$this->Form ->input('password', array('label' => FALSE,'class'=>'form-control','placeholder'=>'Code')).'</div>
                    <div class="clearfix"></div>';
        ?>
    </fieldset>
    <?php
	echo $this->Form->submit(__('Login'), array('name' => 'login'));

 ?>


<div >
    <?php echo $this->Form->create('Person'); ?>
    <fieldset>
        <legend><?php echo __('CREATE ACCOUNT'); ?></legend>
        <?php
		echo $this->Form ->input('firstname', array('label' => 'First Name')); //has a label element
		echo $this->Form ->input('lastname', array('label' => 'Last Name'));
		echo $this->Form ->input('code', array('label' => 'Code')); //has a label element
		echo $this->Form ->input('telephone', array('label' => 'Telephone'));
		echo $this->Form ->input('email', array('label' => 'Email')); //has a label element
		
        ?>
    </fieldset>
    <?php 
	echo $this->Form->submit('Create',array("name"=> "next"));
    echo $this->Form->end();
	?>
</div>
             </div>
        <!--/span-->
    </div><!--/row-->
</div><!--/fluid-row-->

</div><!--/.fluid-container-->

<!-- external javascript -->
 </div>          