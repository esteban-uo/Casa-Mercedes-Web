(function( $ ){
  $.fn.cakephp = function(parametros, callback) {
		var eDOM = this;
		eDOM.hide();
		eDOM.parent().append($('<div id="panelTmpAjax"></div>'));
		var panel = $("#panelTmpAjax");
		panel.append($('<input id="botonGenerarAjax" type="button" value="'+parametros.label+'" class="'+parametros.claseAccion+'" />'));
		$("#botonGenerarAjax").bind("click", function(){
								$(this).attr("disabled","disabled");
								$.ajax({
									url: parametros.rutaJs+"/"+parametros.controlador+"/"+parametros.accion+"/ajax:true",
									data: {"ajax":true},
									type: 'POST',
									success: function(respuesta){
										$('body').css('overflow-y', 'hidden');
										$('<div id="overlay"></div>')
											.css('top', $(document).scrollTop())
											.css('opacity', '0')
											.animate({'opacity': '0.5'}, 'slow')
											.appendTo('body');
										
										$('<div id="lightbox"></div>')
											.hide()
											.appendTo('body');
										
										$('#lightbox').append(respuesta);
										
										l("Alto "+$('#lightbox').height());
										l("Ancho "+$('#lightbox').width());
										
										var top = ($(window).height() - $('#lightbox').height()) / 2;
										var left = ($(window).width() - $('#lightbox').width()) / 2;
										
										$('#lightbox').append($('<a href="" id="cerrarLightBox" title="Cerrar" >Cerrar</a>').bind("click", function(){
											cerrarLightBox();
											return false;
										}));
										
										$('#lightbox')
										.css({
										'top': top + $(document).scrollTop(),
										'left': left
										})
										.fadeIn();
										
										var formulario = $('#lightbox').find('form');
										formulario.submit(function() {
											$(this).ajaxSubmit({
																url: parametros.rutaJs+"/"+parametros.controlador+"/"+parametros.accion+"/ajax:true",
																dataType: 'html',
																success: function(responseText){
																	var mensajesError = $(responseText).find(parametros.eMensajeValidacionError);
																	var mensajeControlador = $(responseText).find(parametros.eMensajeControlador);
																	$('#lightbox').append($('<div id="mensajesLightBox"><ul></ul></div>'));
																	
																	if(mensajesError.length > 0){ // Si hay un error
																		l($(mensajeControlador).html());
																		$.each(mensajesError, function(index,valor){
																			agregarElementoAnimacion($(valor).html());
																		});
																	}else{ // Si no hay errores
																		l($(mensajeControlador).html());
																		eDOM.attr("value", $(responseText).find(parametros.eMensajeInputId).find("input").val());
																		
																		panel.html(parametros.mensajeCorrecto); // Ejecutar al terminar
																		cerrarLightBox();
																		$("#botonGenerarAjax").removeAttr("disabled");
																		if($.isFunction(callback)) {
																			callback.call(this, $(mensajeControlador).html());
																		}
																	}
																}
															}); 
											return false; 
										});
									},
									dataType: 'html'
								});
						  });
	
	$(document).keypress(function(e){
		if (e.keyCode == 27 && $("#overlay").length > 0) {
				cerrarLightBox();
		}
	});
	
	function agregarElementoAnimacion(valor){
		$("<li>"+valor+"</li>")
							.fadeTo(500,0.9)
							.delay(3000)
							.fadeOut(1500,function(){
											$(this).remove();
										}
							).appendTo('#mensajesLightBox ul').delay(3000);
	}
	
	function cerrarLightBox(){
		$('#overlay, #lightbox')
				.fadeOut('slow', function() {
					$(this).remove();
					$('body').css('overflow-y', 'auto');
					$("#botonGenerarAjax").removeAttr("disabled");
		});
	}
	
	function l(parametros){
		console.log(parametros);
	}
	
  };
})( jQuery );