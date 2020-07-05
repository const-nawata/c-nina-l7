require('./bootstrap');

$(document).ready(function(){

	$("div.lang a.dropdown-item").click(function(){

		alert("Test message of lang item.");

		// window.location.replace( "/"+$(this).attr("lang")+"/"+current_url );
	});


});
