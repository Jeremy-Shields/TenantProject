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
$cakeVersion = __d('cake_dev', 'CakePHP %s', Configure::version())
?>
<!DOCTYPE html>

<html lang = "en">
<head>
    <meta name = "viewport" content = "width=device-width, intial-scale=1">
	<?php echo $this->Html->charset(); ?>
	<title>
		<?php echo $cakeDescription ?>:
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		//echo $this->Html->css('cake.generic');
                echo $this->Html->css('bootstrap.css');
                echo $this->Html->css('bootstrap-responsive.css');
                echo $this->Html->css('custumLayout.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
        <?php echo $this->Html->script('JQuery.js'); ?>
        <?php echo $this->Html->script('bootstrap.js');?>
</head>
<body>
	
		<div id="header" class = "container">
                    <div class = "row">
  
                        <div class = "span10">
                            <?php echo $this->Html->image('testBanner.jpg', array('alt' => 'CakePhP', 'class' =>'bannerPhoto'));?>
                        </div>
                        <div class = "span2">
                            <?php
                                echo $this->Form->create('Users', array('action' => 'login', 'class' => 'form-horizontal'));
                                echo $this->Form->input('username', array('class' => 'input-small'));
                                echo $this->Form->input('password', array('class' => 'input-small'));
                                echo $this->Form->end('Login', array('class' => 'btn-info'));
                            ?>
                            <a href = "#" class = "btn-info">Sigh Up!</a>
                            <a href = '#' class = "btn-warning">Forgot Password</a>
                        </div>
                    </div>
		</div>
                <div class = "navbar">
                    <div class = "navbar-inner">
                        <div class = "container">
                            <ul class = "nav">
                                <li class = "active"><a href = "/TenantProject/home/view">Home</a></li>
                                <li><a href = "#">About</a></li>
                            </ul>
			</div>
                    </div>
		</div>
		<div id="content" class = "container">

			<?php echo $this->Session->flash(); ?>

			<?php echo $this->fetch('content'); ?>
		</div>
                <div class = "container">
                    <div class = "row">
                        
                        <div id="footer span12">
                   
                            <?php echo $this->Html->link(
					$this->Html->image('cake.power.gif', array('alt' => $cakeDescription, 'border' => '0')),
					'http://www.cakephp.org/',
					array('target' => '_blank', 'escape' => false, 'id' => 'cake-powered')
				);
                            ?>
                            <p>
				<?php echo $cakeVersion; ?>
                            </p>
                        
                        
                        </div>

                        </div>
                    </div>
                </div>
	
	
</body>
</html>
