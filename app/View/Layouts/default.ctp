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

$cakeDescription = __d('cake_dev', 'Tenant Check');
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
                echo $this->Html->css('toastr.min.css');

		echo $this->fetch('meta');
		echo $this->fetch('css');
		echo $this->fetch('script');
	?>
        <?php echo $this->Html->script('JQuery.js'); ?>
        <?php echo $this->Html->script('bootstrap.js');?>
        <?php echo $this->Html->script('toastr.min.js');?>
    <?php echo $this->Html->script('maskedInput.js');?>
</head>
<body>
	
		<div id="header" class = "container">
                    <div class = "row">
  
                        <div class = "span10">
                            <?php echo $this->Html->image('testBanner.jpg', array('alt' => 'CakePhP', 'class' =>'bannerPhoto'));?>
                        </div>
                    </div>
		</div>
       <div class = "row">
                    <div class ="span4">
                    </div>
              <div class = "span8">
                <div class = "navbar">
                    <div class = "navbar-inner">
                        <div class = "container">
                            <ul class = "nav nav-justified">
                                <li><a href = "/TenantProject/home/view">Home</a></li>
                                <li><a href = "/TenantProject/tenants">Tenants</a></li>
                                <li><a href = "/TenantProject/home/about">About</a></li>
                            </ul>
			</div>
                    </div>
		</div>
              </div>
       </div>
     
		<div id="content" class = "container">
                    <div class = "row">
                        <div class="span2">
			<?php echo $this->Session->flash(); ?>
                        </div>
                        <div class = "span8">
			<?php echo $this->fetch('content'); ?>
                        </div>
                        <div class = "span2">
                        </div>
                    </div>
		</div>

                </div>
	
	
</body>
</html>
