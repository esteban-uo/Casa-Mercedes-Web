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
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>
           <?php __('Casa de las Mercedes I.A.P.'); ?>
           <?php echo $title_for_layout; ?>
       </title>
<?php
           echo $this->Html->meta('icon');
           echo $this->Html->css('css.index');
           echo $html->script(array('prototype','scriptaculous.js?load=effects','modalbox','cakemodalbox'));
           echo $scripts_for_layout;
           echo $this->Html->css('modalbox');
       ?>
        
    <script type="text/javascript" src="http://ajax.googleapis.com/ajax/libs/jquery/1.6.2/jquery.min.js"></script>
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
		<div id="footer">
<p><?php echo $this->Html->link(__('Casa Mercedes', true), 'http://www.casamercedes.com'); ?> 2011 todos los derechos | <?php echo $this->Html->link(__('Campus party Mexico', true), 'http://www.campus-party.com.mx'); ?> | <?php echo $this->Html->link(__('Html', true), '#'); ?> & <?php echo $this->Html->link(__('Css', true), '#'); ?> validado</p>
		</div>
	</div>
</body>
</html>