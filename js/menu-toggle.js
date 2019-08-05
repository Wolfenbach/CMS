function menu_toggle(){
	$(".mobile-menu").toggle();
	
	if($(".mobile-menu").css('display') == "none"){
		$("h1#h1_in").css("margin-top", "65px");
		$("h1#h1_cont").css("margin-top", "95px");
		$(".article-intro").css("margin-top", "40px");
	}
	else{
		$("h1#h1_in").css('margin-top', '253px');
		$("h1#h1_cont").css("margin-top", "283px");
		$(".article-intro").css("margin-top", "228px");
	}
}
