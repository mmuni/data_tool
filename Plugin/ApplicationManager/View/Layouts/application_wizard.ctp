<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title><?php echo $this->fetch('title'); ?></title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min', 'mmu'));
		echo $this->Html->script(array('jquery-1.11.2.min', 'jquery-migrate-1.2.1.min', 'bootstrap.min'));
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<nav class="navbar navbar-default" role="navigation">
		<div class="container">
			<div class="navbar-header">
				<a class="navbar-brand" href="/">
					<img alt="Mountains of the Moon University Logo" src="/img/mmuLogo.png">
					Mountains of the Moon University
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/applications">Applications</a></li>

					<?php if ($this->Session->read('Auth.User')): ?>
						<li><a href="/users/logout">Logout</a></li>
					<?php else: ?>
						<li><a href="/users/login">Login</a></li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</nav>

	<div id="container" class="container">
		<div id="page" class="row">
			<div id="sidebar" class="col-md-2">
				<?php echo $this->element('wizard_sidebar'); ?>
			</div>
			<div id="content" class="col-md-10">
				<?php echo $this->fetch('content');?>
			</div>
		</div>
	</div>

</body>
</html>
