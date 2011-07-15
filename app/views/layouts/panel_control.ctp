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

          echo $this->Html->css('css.index');

           echo $scripts_for_layout;
       ?>
</head>
       <body>
	   <h1 class="title">Panel de Control</h1>
	   <span class="button_login teal"> <?php echo $this->Html->link(__('Inicio', true), array('action' => 'index'));?></span>
	   <span class="button_login alt"> <?php echo $this->Html->link(__('Panel', true), array('action' => 'acp'));?></span>
	   
	<div id="content">
			
			<?php echo $this->Session->flash(); ?>

			<?php echo $content_for_layout; ?>

		</div>
				<div id="footer">
		<p><?php echo $this->Html->link(__('Casa Mercedes', true), 'http://www.casamercedes.com'); ?> 2011 todos los derechos | <?php echo $this->Html->link(__('Campus party Mexico', true), 'http://www.campus-party.com.mx'); ?> | <?php echo $this->Html->link(__('Html', true), '#'); ?> & <?php echo $this->Html->link(__('Css', true), '#'); ?> validado</p>
				</div>
   </body>
</html>