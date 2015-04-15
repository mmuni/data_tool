<?php $this->assign('title', 'Login'); ?>

<div class="row">
	<div class="col-md-4 col-md-offset-3">
		<div class="users form">
			<?php echo $this->Session->flash('auth'); ?>
			<?php echo $this->Form->create('User'); ?>
			<?php echo $this->Form->inputs(array('username', 'password', 'legend' => "Login")); ?>
			<?php echo $this->Form->end(__('Login')); ?>
		</div>

	</div>
</div>
