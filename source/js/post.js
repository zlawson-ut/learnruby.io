jQuery( document ).ready(function() {
	if(jQuery('#quiz').length > 0){
		jQuery('#quiz').on("load", function() {
		    jQuery('.loader').remove();
		});
	}
	if(jQuery('.next').length > 0){
		jQuery(".next").mouseup(function() {
			jQuery(this).find('.heart').toggleClass("is-active");
		});
		console.log('you got a next link');
	}
});
