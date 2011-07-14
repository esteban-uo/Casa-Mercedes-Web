
<script type="text/javascript">
$(function() {
	$('ul.nav a').bind('click',function(event){
		var $anchor = $(this);
		/*
		if you want to use one of the easing effects:
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1500,'easeInOutExpo');
		 */
		$('html, body').stop().animate({
			scrollLeft: $($anchor.attr('href')).offset().left
		}, 1000);
		event.preventDefault();
	});
});

</script> 
<ul class="nav">
	<li><a href="#section1">Inicio</a></li>
	<li><a href="#section2">Valores</a></li>	
	<li><a href="#section3">Programas</a></li>
</ul>

<div id="scroll">
<div class="section pink" id="section1">
	<h1 class="title">Casa<br />  Mercedes</h1>
	<p>
		MY Spectre around me night and day
		Like a wild beast guards my way;
		My Emanation far within
		Weeps incessantly for my sin.
	</p>

</div>
<div class="section purple" id="section2">
	<h1 class="title">Nuestros<br />Valores</h1>
	<p>
		A fathomless and boundless deep,
		There we wander, there we weep;
		On the hungry craving wind
		My Spectre follows thee behind.

	</p>

</div>
<div class="section blue" id="section3">
	<h1 class="title">Nuestros<br />Programas</h1>
		<p>
		He scents thy footsteps in the snow
		Wheresoever thou dost go,
		Thro' the wintry hail and rain.
		When wilt thou return again?

	</p>
	<ul class="nav">

	</ul>
</div>
</div>
