<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" />
       <title>
           <?php __('Casa Mercedes - '); ?>
           <?php echo $title_for_layout; ?>
       </title>
<?php
           echo $this->Html->meta('icon');
           echo $this->Html->css('cake.diego');
           echo $html->script(array('prototype','scriptaculous.js?load=effects','modalbox'));
           echo $scripts_for_layout;
           echo $this->Html->css('modalbox');
       ?>
</head>
       <body>
 <h1>Pagina principal</h1>
               <?php echo $this->Session->flash(); ?>
               <?php echo $content_for_layout; ?>
			<img src="img/test-error-icon.png" />
   </body>
</html>