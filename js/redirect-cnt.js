
$(document).ready(function(){
	/* Det er også den eneste linje der skal rettes i, 
		da feltet kan være anderledes fra design til design */ 
	  
	var targetele = $("#cnt_down");
	var returnurl = window.location.protocol + "//" + window.location.hostname + $("#returnurl").attr("href");
	var countdowntime = 15;
	var lang = $('html').attr('lang');
	var unit = "";
	
	function get_new_time(countdowntime){
		return --countdowntime;
	}
	
	function get_new_unit(countdowntime, lang){
		
		var unit = "";
		
		if((countdowntime > 1 || countdowntime == 0) && lang == "da")
			unit = " sekunder";
		else if((countdowntime > 1 || countdowntime == 0) && lang == "en")
			unit = " seconds";
		else if(countdowntime == 1 && lang == "da")
			unit = " sekund";
		else if(countdowntime == 1 && lang == "en")
			unit = " second";
		
		return unit;
	}
	
	console.log(returnurl);
	
    var x = setInterval(function(){ 
		if(countdowntime != 0){
			countdowntime = get_new_time(countdowntime);
			unit = get_new_unit(countdowntime, lang);
			targetele.text(countdowntime + unit); 
		} else {
			window.location.href = returnurl;
		}
    }, 1000);
	
});