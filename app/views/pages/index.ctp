<script type="text/javascript">
$(function() {
	$('#nav a, .button_section1').bind('click',function(event){
		var $anchor = $(this);
		
		/*if you want to use one of the easing effects:
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1500,'easeInOutExpo');
		*/
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1000);
		event.preventDefault();
	});
	$("#form_login").hide();
	$("#boton_formulario_rapido").bind("click", function (){
		$("#form_login").toggle();
		
	});
});

</script> 

<div id="scroll">
<div class="section pink" id="section1">
	<h1 class="title main">Nuestra<br />casa</h1>
	<p id="tagline">
Somos una Institución de Asistencia Privada, con más de 16 años trabajando por niñas y adolescentes, sus hijas e hijos, en situación de pobreza, vulnerabilidad y riesgo.	</p>
<p class="especial"> Creemos firmemente que nuestras niñas y adolescentes tienen el derecho de transformar sus vidas proporcionando Atención Integral, Desarrollando Capacidades y Fomentando Oportunidades.</p>
<span class="casa">Casa de las Mercedes I.A.P.</span>
	<ul id="nav">
		<li><a href="#section1">Inicio</a></li>
		<li><a href="#section2">Valores</a></li>
		<li><a href="#section3">Programas</a></li>
	</ul>
	<div id="formulario_rapido">
		<div id="boton_formulario_rapido">Iniciar Sesión</div>
		<div id="form_login">
		<?php
			echo $this->Form->create('User', array('action' => 'login'));
			echo $this->Form->input('username', array("label"=>"Usuario", "class" => ""));
			echo $this->Form->input('password', array("label"=>"Contraseña", "class" => ""));
			echo $this->Form->end(array("name"=>"Enviar Consulta", "label"=>"Iniciar sesión", "class" => ""));
		?>
		</div>
	</div>
</div>
<div class="section purple" id="section2">
	<h1 class="title main">Nuestros<br />Valores</h1>
<div id="valores">	
<h2 class="subtitle">Misión.</h2>
<p class="parag">Contribuir a un desarrollo social, coadyuvando a la reducción de los índices de niñas de la calle, explotación sexual y explotación
infantil, proporcionando cuidado y protección integral a las niñas y adolescentes embarazadas y/o con bebé, expuestas a situación de calle y explotación.</p>
<h2 class="subtitle">Visión</h2>
<p class="parag">Ofrecer a niñas y adolescentes en condiciones de riesgo social el mejor lugar para su desarrollo personal y el sano crecimiento de sus hijas e hijos (en su caso), a través de un servicio profesional y con altos valores trascendentes	</p>
</div>

</div>
<div class="section blue" id="section3">
	<h1 class="title main">Nuestros<br />Programas</h1>
<div id="programas">
<h2 class="subtitle">Albergue.</h2>
<p class="parag">Proporcionamos a niñas y jóvenes, en su caso, sus hijas e hijos de toda la república, un hogar seguro y estable en el que encuentran una asistencia integral que les permite iniciar una vida independiente y productiva.</p>
<h2 class="subtitle">Salud</h2>
<p class="parag">Nuestro programa de salud incluye: Medicina General y preventiva, ginecología-obstetricia, Neonatología y pediatría, Psicología y Psiquiatría, Prevención y tratamiento de adicciones, y Medicina alternativa.</p>
<h2 class="subtitle">Estancia Infantil.</h2>
<p class="parag">Para la atención de las hijas e hijos de las adolescentes contamos con un centro de educación inicial que promueve su desarrollo personal, ampliar y consolidar su estructura mental, lenguaje, psicomotricidad, afectividad, desarrollando sus habilidades y actitudes.</p>
<h2 class="subtitle">Educación.</h2>
<p class="parag">Promover el desarrollo educativo niñas y adolescentes a través de la canalización a instancias educativas, seguimiento permanente del proceso escolar.</p>
<h2 class="subtitle">Capacitación Laboral.</h2>
<p class="parag">Para una correcta reinserción en la vida productiva y autosuficiente contamos con capacitación técnica mediante talleres permanentes: Computación, Costura, Manualidades, entre otros.</p>
</div>

</div>
<div id="patrocinadores">
<h4>Gracias a:</h4>
<a href="http://www.extend.com.mx" class="extend"></a>
</div>
</div>