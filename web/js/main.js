jQuery(document).ready(function($) {
	$(".scroll").click(function(event){		
		event.preventDefault();
		$('html,body').animate({
			scrollTop:$(this.hash).offset().top
		},1000);
	});
});

$(document).ready(function() {
	var defaults = {
		containerID: 'toTop', // fading element id
		containerHoverID: 'toTopHover', // fading element hover id
		scrollSpeed: 1000,
		easingType: 'linear'
	};
	$().UItoTop({
		easingType: 'easeOutQuart'
	});
});