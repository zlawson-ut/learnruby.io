jQuery( document ).ready(function() {
	if(jQuery('#quiz').length > 0){
		jQuery('#quiz').on("load", function() {
		    jQuery('.loader').remove();
			console.log('quiz loaded!');
		});
	}
	if(jQuery('.next').length > 0){
		jQuery(".next").mouseup(function() {
			jQuery(this).find('.heart').toggleClass("is-active");
		});
	}
});
