var indicador = 0;
$(document).on('ready',function(){
	$('.left').on('click',function(e){
		e.preventDefault();
		moveSlider('left');
	});
	$('.right').on('click',function(e){
		e.preventDefault();
		moveSlider('right');
	});	
	defineSizes();
});
function defineSizes(){
	$('.container .slide').each(function(i,el){
		$(el).css({
			'background-image': "url("+$(el).data("background")+")",
			'height': ($('.container').width() * 0.45 )+'px',
			'width': ($('.container').width())+'px'
		});
	});
}
function moveSlider(direccion){
	var limite = $('.container .slide').length;
	indicador = (direccion == 'right')? indicador + 1 : indicador - 1;
	indicador = (indicador >= limite)? 0 : indicador;
	indicador = (indicador < 0) ? limite - 1 : indicador;
	
	$('.container .slideContainer').animate({
		'margin-left': -(indicador * $('.container').width())+'px'
	});
}