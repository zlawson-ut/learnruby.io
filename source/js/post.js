jQuery( document ).ready(function() {
	if(jQuery('#quiz').length > 0){
		jQuery('#quiz').ready(function() {
		    jQuery('.loader').remove();
			console.log('quiz loaded!');
		});
		console.log('You got a quiz!');
	}
	if(jQuery('.next').length > 0){
		jQuery(".next").mouseup(function() {
			jQuery(this).find('.heart').toggleClass("is-active");
		});
	}
});
