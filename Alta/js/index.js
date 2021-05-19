
/* Registro */

var current_fs, next_fs, previous_fs; 
var left, opacity, scale; 
var animating; 

/* Botón siguiente */

$(".next").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	next_fs = $(this).parent().next();

	/* Ver siguiente cuadrado */

	next_fs.show(); 
	
	/* Animación */

	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {
			scale = 1 - (1 - now) * 0.2;
			left = (now * 50)+"%";
			opacity = 1 - now;
			current_fs.css({
        'transform': 'scale('+scale+')',
        'position': 'absolute'
      });
			next_fs.css({'left': left, 'opacity': opacity});
		},

		/* Duración de la animación */

		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 

		easing: 'easeInOutBack'
	});
});

/* Botón anterior */

$(".previo").click(function(){
	if(animating) return false;
	animating = true;
	
	current_fs = $(this).parent();
	previous_fs = $(this).parent().prev();

	/* Ver cuadrado anterior */
	
	previous_fs.show(); 
	
	/* Animación */

	current_fs.animate({opacity: 0}, {
		step: function(now, mx) {	
			scale = 0.8 + (1 - now) * 0.2;
			left = ((1-now) * 50)+"%";
			opacity = 1 - now;
			current_fs.css({'left': left});
			previous_fs.css({'transform': 'scale('+scale+')', 'opacity': opacity});
		},
        
		/* Duración de la animación */

		duration: 800, 
		complete: function(){
			current_fs.hide();
			animating = false;
		}, 

		easing: 'easeInOutBack'
	});
});

$(".submit").click(function(){
	return false;
})

	

