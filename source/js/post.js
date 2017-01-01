 (function($) {
 	$( document ).ready(function() {
	 	if($('#quiz').length > 0){
			$('#quiz').on("load", function() {
			    $('.loader').remove();
			});
	 	}
	 	if($('.next').length > 0){
	 		$(".next").mouseup(function() {
	 			$(this).find('.heart').toggleClass("is-active");
			});
	 	}
 	});
})( jQuery );