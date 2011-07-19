<div class="albergados form">
<?php 

if (isset($closeModalbox) && $closeModalbox) echo "<div id='closeModalbox'></div>";

if( $ajax->isAjax()){
    echo $ajax->form('add', 'post', array(
        'model'    => 'Albergados',
        'url'      => array( 'controller' => 'albergados', 'action' => 'add'),
        'update'   => 'MB_content',
        'complete' => 'closeModalbox();'
        ));
}else{
    echo $form->create('Albergado');
}
?>
	<fieldset>
		<legend><?php __('Add Albergado'); ?></legend>
	<?php
		echo $this->Form->input('persona_id', array("label"=>"Nombre de la persona registrada", 'class' => 'req'));
		echo $this->Form->input('expediente', array('class' => 'req'));
		echo $this->Form->input('casa_id', array('class' => 'req'));
		echo $this->Form->input('fecha_ingreso', array('class' => 'req'));
		echo $this->Form->input('embarazo_actual', array('class' => 'req'));
		echo $this->Form->input('cant_hijos', array("label"=>"Cantidad de hijos", 'class' => 'req'));
		echo $this->Form->input('remitida_por', array("label"=>"Registrada por", 'class' => 'req'));
		echo $this->Form->input('averiguacion_previa', array("label"=>"Averiguación previa", 'class' => 'req'));
		echo $this->Form->input('familiograma_imagen_id', array("type"=>"text"));
		echo $this->Form->input('modified_user_id', array('value'=>Configure::read('id.usuario.prueba'), 'type' => 'hidden'));
	?>
	</fieldset>
<?php echo $this->Form->end(__('Submit', true));?>
</div>