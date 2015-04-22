$(document).ready(function(){

$('ul.nav li.dropdown').hover(function(){
	$('dropdown-sumenu', this).fadeIn();
}, function(){
	$('.dropdown-menu',this).fadeout('fast');
});



}); 