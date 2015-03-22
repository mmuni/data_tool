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

$cakeDescription = __d('cake_dev', 'CakePHP: the rapid development php framework');
?>
<!DOCTYPE html>
<html>
<head>
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');
		$this->Html->css('cake.generic');
		echo $this->Html->css('bootstrap');
		echo $this->Html->css('mmu');
		echo $this->Html->script('jquery-1.11.0');
		echo $this->Html->script('bootstrap');
		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
</head>
<body>

	<div id="container" class="container">

        <nav class="navbar navbar-default" role="navigation">
            <div class="navbar-header">
                <a class="navbar-brand" href="/">
                    <img src="/img/mmuLogo.png">
                </a>
            </div>
        </nav>

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

</body>
</html>
