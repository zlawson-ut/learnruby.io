jQuery( document ).ready(function() {
	if(jQuery('#quiz').length > 0){
		jQuery('#quiz').ready(function() {
		    jQuery('.loader').remove();
		});
	}
	if(jQuery('.next').length > 0){
		jQuery(".next").click(function(e) {
			e.preventDefault();
		});
		jQuery(".next").mouseup(function() {
			jQuery(this).find('.heart').addClass("is-active");
			window.location.href = jQuery(this).attr('href');
		});
	}
});
