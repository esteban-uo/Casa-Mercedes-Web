<p>TODO: Formulario de login al panel de control</p>
<p>Link al Panel de Control (acceso para todos): <?php echo $this->Html->link(__('Panel de Control', true), array('controller'=>'pages','action' => 'acp'));?></p>
<p></p>

<div>
<?php
	echo $this->Form->create('User', array('action' => 'login'));
	echo $this->Form->input('username', array("label"=>"Usuario"));
    echo $this->Form->input('password', array("label"=>"Contraseña"));
    echo $this->Form->end('Login');
?>
</div>