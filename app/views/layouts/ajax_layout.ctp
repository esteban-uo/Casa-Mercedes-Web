<!DOCTYPE html PUBLIC "-//W3C//DTD XHTML 1.0 Transitional//EN" "http://www.w3.org/TR/xhtml1/DTD/xhtml1-transitional.dtd">
<html xmlns="http://www.w3.org/1999/xhtml">
    <head>
        <meta http-equiv="Content-Type" content="text/html; charset=utf-8" /> 
        <title>
            <?php __('Casa de las Mercedes - '); ?>
            <?php echo $title_for_layout; ?>
        </title>
        <?php
        echo $this->Html->meta('icon');
        echo $this->Html->css('casa.mercedes');
        echo $scripts_for_layout;
        ?>
    </head>
    <body>
		  <?php echo $this->Session->flash(); ?>
		  <?php echo $this->Session->flash("id"); ?>
          <?php echo $content_for_layout; ?>
    </body>
</html>