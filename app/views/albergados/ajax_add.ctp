<div>
<?php

if (isset($closeModalbox) && $closeModalbox) echo "<div id='closeModalbox'></div>";

if( $ajax->isAjax()){
    echo $ajax->form('ajax_add', 'post', array(
        'model'    => 'Albergados',
        'url'      => array( 'controller' => 'albergados', 'action' => 'ajax_add'),
        'update'   => 'MB_content',
        'complete' => 'closeModalbox();'
        ));
}else{
    echo $form->create('Albergado');
}
?>
	<fieldset>
		<legend><?php __('Agregar Albergado'); ?></legend>
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
<?php echo $this->Form->end(__('Registrar', true));?>
</div>

<script type="text/javascript">
    // Look for all req fields and put them in an array
    requiredFields = document.getElementsByClassName('req')

    //Loop the array and place observers on the req fields
    for(i=0; i<requiredFields.length;i++){
        new Form.Element.Observer(requiredFields[i], 2, liveActionCallback);
    }

    // Callback if something happens in one of the req fields
    function liveActionCallback( element, value ) {

        // Function for handling the response XML file wich the Ajax.Request below gets for us
            var handlerFunc = function(t) {
                var xmlDoc = t.responseXML.documentElement;
                // Check if there is an error
                      if(xmlDoc.getElementsByTagName('error')[0].firstChild.nodeValue == '1'){
                          // Adding a classname to the form field wich makes it red
                                   $(element).addClassName('form-error');
                               } else {
                                   // if there is no error, remove the req class
                                            $(element).removeClassName('req');
                                        }
                                    }


                                    // Create a new ajax request, note the .xml added to the url, it makes sure we get an xml back from the controller.

                                    new Ajax.Request('/regwiz/albergado.xml', {
                                        asynchronous:true,
                                        evalScripts:true,
                                        parameters:Form.Element.serialize(element),
                                        onSuccess:handlerFunc
                                    }
                                )
                            }
</script>