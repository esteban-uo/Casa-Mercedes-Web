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
        <h1 class="title_alt panel">Casa de las Mercedes I.A.P.</h1>
        <span class="button_generic teal"> <?php echo $this->Html->link(__('Home', true), array('controller'=>'pages','action' => 'index')); ?></span>
        <span class="button_generic alt"> <?php echo $this->Html->link(__('Panel', true), array('controller'=>'pages', 'action' => 'acp')); ?></span>
        <div id="content">
            <div id="contenido">
                <div class="actions">
                    <h2 class="subtitle">Casa</h2>
                    <ul id="act_style">
                        <li><?php echo $this->Html->link(__('Crear Persona', true), array('controller' => 'personas', 'action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('Enlistar Personas', true), array('controller' => 'personas', 'action' => 'index')); ?></li>
						<li><?php echo $this->Html->link(__('Enlistar Albergados', true), array('controller' => 'albergados', 'action' => 'index')); ?></li>
                        <li><?php echo $this->Html->link(__('Enlistar Dependientes', true), array('controller' => 'dependientes', 'action' => 'index')); ?></li>
                    </ul>
                    <h2 class="subtitle">Usuarios</h2>
                    <ul id="rep_style">
                        <li><?php echo $this->Html->link(__('Crear Usuario', true), array('controller' => 'users', 'action' => 'add')); ?></li>
                        <li><?php echo $this->Html->link(__('Mostrar Usuarios', true), array('controller' => 'users', 'action' => 'index')); ?></li>
                    </ul>
                </div>
                <?php echo $this->Session->flash(); ?>
                <?php echo $content_for_layout; ?>

            </div>
                <div class="posiciones_cl bottom"></div>
	
        </div>
	
        <div id="footer">
            <p><?php echo $this->Html->link(__('Casa de las Mercedes', true), 'http://www.casamercedes.com'); ?> 2011 todos los derechos | <?php echo $this->Html->link(__('Campus party Mexico', true), 'http://www.campus-party.com.mx'); ?> | <?php echo $this->Html->link(__('Html', true), '#'); ?> & <?php echo $this->Html->link(__('Css', true), '#'); ?> validado</p>
        </div>
    </body>

</html>