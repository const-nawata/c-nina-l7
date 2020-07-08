require('./bootstrap');

$(document).ready(function(){

	$("div.lang a.dropdown-item").click(function(){
		let lang	= $(this).attr("lang");

		$.ajax({
			method:		"POST",
			url:		_setlang_url,
			dataType:	"JSON",
			data:		{ lang: lang },
			success: function( resp ){
				if( resp.success ){
					location.reload();
				}else{
					alert("Server error. Failed to change Language.");
				}
			},
			error: function () {
				console.log({message: 'Could not get Data', isError: true});
			}
		});
	});

});
