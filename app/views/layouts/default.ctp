<?php
/**
 *
 * PHP versions 4 and 5
 *
 * CakePHP(tm) : Rapid Development Framework (http://cakephp.org)
 * Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 *
 * Licensed under The MIT License
 * Redistributions of files must retain the above copyright notice.
 *
 * @copyright     Copyright 2005-2010, Cake Software Foundation, Inc. (http://cakefoundation.org)
 * @link          http://cakephp.org CakePHP(tm) Project
 * @package       cake
 * @subpackage    cake.cake.libs.view.templates.layouts
 * @since         CakePHP(tm) v 0.10.0.1076
 * @license       MIT License (http://www.opensource.org/licenses/mit-license.php)
 */
?>
<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
<head>

	<?php echo $this->Html->charset(); ?>
	<title>
		<?php __('Casa de las Mercedes I.A.P.'); ?>
		<?php echo $title_for_layout; ?>
	</title>
	<?php
		echo $this->Html->meta('icon');

		echo $this->Html->css('css.index');
		
		
		
		echo $scripts_for_layout;
	?>
	
<script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>

<!--[if lt IE 9]>
<script src="http://ie7-js.googlecode.com/svn/version/2.1(beta4)/IE9.js"></script>
<![endif]-->
	
</head>
<body>
	<div id="container">
		<!--<div id="header">
			<h1><?php echo $this->Html->link(__('Casa de las mercedes I.A.P.', true), ''); ?></h1>
		</div>-->
		<div id="content">

			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
		<div class="espacio_vacio"></div>
		<div id="footer">
<p><?php echo $this->Html->link(__('Casa de las Mercedes', true), 'http://www.casamercedes.com'); ?> 2011 todos los derechos | <?php echo $this->Html->link(__('Campus party Mexico', true), 'http://www.campus-party.com.mx'); ?> | <?php echo $this->Html->link(__('Html', true), '#'); ?> & <?php echo $this->Html->link(__('Css', true), '#'); ?> validado</p>
		</div>
	</div>
</body>
</html>