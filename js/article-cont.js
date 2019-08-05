$(document).ready(function(){
	
	var offset_top = 0;
	
	//Offset value is half of the images width or height - half of text box area width or height
	//Offset_top is offset additionally by top menu bar height
	offset_top = (0 - $(".article-intro").height() / 2);
	
	$(".article-intro").css("margin-top", $("#top-container").css("height"));
	$(".article-intro").css("margin-bottom", "-" + $(".intro-text").height() + "px");
	$(".intro-text").css("top", offset_top + "px");
});

$( window ).resize(function(){
	var offset_top = 0;
	
	//Offset value is half of the images width or height - half of text box area width or height
	//Offset_top is offset additionally by top menu bar height
	offset_top = (0 - $(".article-intro").height() / 2);
	
	$(".article-intro").css("margin-top", $("#top-container").css("height"));
	$(".article-intro").css("margin-bottom", "-" + $(".intro-text").height() + "px");
	$(".intro-text").css("top", offset_top + "px");
});