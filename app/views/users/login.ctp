<div id="ingresar">
	<h1 class="title"><br />Administraci&oacute;n</h1>

<span class="button_generic teal"> <?php echo $this->Html->link(__('Home', true), array('controller'=>'pages','action' => 'index'));?></span>
<p>TODO: Link al Panel de Control (acceso para todos): <?php echo $this->Html->link(__('Panel de Control', true), array('controller'=>'pages','action' => 'acp'));?></p>

<div>
<?php
	echo $this->Form->create('User', array('action' => 'login'));
	echo $this->Form->input('username', array("label"=>"Usuario", "class" => "input_style"));
    echo $this->Form->input('password', array("label"=>"Contraseña", "class" => "input_style"));
    echo $this->Form->end(array("name"=>"Enviar Consulta", "label"=>"Login", "class" => "button_form"));
?>
</div>