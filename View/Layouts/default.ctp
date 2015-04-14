<?php
/**
 *
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * For full copyright and license information, please see the LICENSE.txt
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright (c) Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       app.View.Layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       http://www.opensource.org/licenses/mit-license.php MIT License
 */

$cakeDescription = __d('cake_dev', 'MMU .::. ');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>
		<?php echo $this->fetch('title'); ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		echo $this->Html->css(array('bootstrap.min', 'mmu'));
		echo $this->Html->script(array('jquery-1.11.2.min', 'jquery-migrate-1.2.1.min', 'bootstrap.min', 'holder'));
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
					<img alt="Mountains of the Moon University Logo" src="/img/mmulogo.png">
					Mountains of the Moon University
				</a>
			</div>
			<div class="collapse navbar-collapse" id="bs-example-navbar-collapse-1">
				<ul class="nav navbar-nav navbar-right">
					<li><a href="/applications">Applications</a></li>

					<?php if ($this->Session->read('Auth.User')): ?>
						<li><a href="/users/profile">
							<?= $this->Session->read('Auth.User.username'); ?></a>
							(<?= $this->Session->read('Auth.User.role'); ?>)
						</li>
						<li><a href="/users/logout">Logout</a></li>
					<?php else: ?>
						<li><a href="/users/login">Login</a></li>
					<?php endif ?>
				</ul>
			</div>
		</div>
	</nav>

	<div id="container" class="container">


    <?php
    if ($this->Session->read('Auth.User')){
        echo $this->element('admin_nav');
    }
    ?>

		<div id="page" class="row">
			<div id="content" class="col-md-12">
				<?php echo $this->fetch('content');?>
			</div>
		</div>

		<div id="footer" class="row">
		</div>

	</div>

<?php
	echo $this->Js->writeBuffer(); // Write cached scripts
?>
</body>
</html>
