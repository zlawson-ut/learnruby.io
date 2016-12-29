 (function($) {
 	if($('#quiz').length > 0){
		$('#quiz').on("load", function() {
		    $('.loader').remove();
		});
 	}
})( jQuery );