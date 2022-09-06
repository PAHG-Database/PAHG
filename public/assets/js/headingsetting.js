$ (document).ready (function(){

	$("p").hide ();
	$("h2").click (function(){
		$ (this).next().slideToggle(300);
	});
});