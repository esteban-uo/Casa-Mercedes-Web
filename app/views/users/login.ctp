<div id="ingresar">
	<h1 class="title foto_chicas">Administraci&oacute;n</h1>

<span class="button_generic teal"> <?php echo $this->Html->link(__('Inicio', true), array('controller'=>'pages','action' => 'index'));?></span>
<div>
<?php
	echo $this->Form->create('User', array('action' => 'login'));
	echo $this->Form->input('username', array("label"=>"Usuario", "class" => "input_style"));
    echo $this->Form->input('password', array("label"=>"Contraseña", "class" => "input_style"));
    echo $this->Form->end(array("name"=>"Enviar Consulta", "label"=>"Login", "class" => "button_form"));
?>
</div>

</div>