
function CreateCookiePopup() { 
	if($("a#danish").length > 0) {
		$("body").append(
		"<div id='cookie_policy' style='position:fixed;left:0px;top:" + $(window).height() + "px;background-color:black;opacity:0.8;color:white;width:100%;padding-bottom:20px;'>" + 
			"<div style='padding:20px;'>" + 
				"<div style='float:left; width:80%;'><h3>Cookiepolitik</h3><p style='color: white;'>Denne side benytter sig af cookies for at kunne fungere korrekt. Hvis du klikker dig videre rundt på siden acceptere du automatisk at vi benytter disse cookies, med undtagelsen for at klikke for at læse om cookiepolitiken, eller ved klikke for at skifte sprog.</br>Du kan læse mere om hvilke cookies siden sætter på min afsnit om <a id='policy' style='color:#C8C8C8;text-decoration:underline;' href='/policy.php' target='_self'>cookiepolitik.</a></p></div>" + 
				"<div id='acceptbtn' style='float:right;curser:pointer;'><a style='color: white;' href='#' disable><b>X</br></a></div>" + 
			"</div>" +
		"</div>");
	}
	else if($("a#english").length > 0) {
		$("body").append(
		"<div id='cookie_policy' style='position:fixed;left:0px;top:" + $(window).height() + "px;background-color:black;opacity:0.8;color:white;width:100%;padding-bottom:20px;'>" + 
			"<div style='padding:20px;'>" + 
				"<div style='float:left; width:80%;'><h3>Cookie policy</h3><p style='color: white;'>This page uses cookies, to insure that it functions correctly. If you click further around the page, or close the popup. Then you will automatic accept that we use these cookies, with the exception of clicking to read the cookie policy, or for clicking to change language.</br>You can read more about which cookies that er used on the following link <a id='policy' style='color:#C8C8C8;text-decoration:underline;' href='/policy.php' target='_self'>cookie policy.</a></p></div>" + 
				"<div id='acceptbtn' style='float:right;curser:pointer;'><a style='color: white;' href='#' disable><b>X</br></a></div>" + 
			"</div>" +
		"</div>");
	}
	$("div#acceptbtn").on("click", function(){
		HideCookieNote();
	});
	
	$("a#policy").on("click", function(){
		setCookie(window.location.href + "alert", "0", 7);
	});
	
	$("a#policy").on("click", function(){
		setCookie(window.location.href + "alert", "0", 7);
	});
	
	$("a").find("img.sel_lang").on("click", function(){
		setCookie(window.location.href + "alert", "0", 7);
	});		
}

function SlideCookieNote() {
	$("div#cookie_policy").animate({"top": "-=" + ($("div#cookie_policy").height() + 20)}, 500);
}

function HideCookieNote() {
	$("div#cookie_policy").remove();
}
	
function PopUpShown() {
	if(typeof(Storage) !== "undefined" || getCookie(window.location.hostname + "-chkcookiealert") == "0") {
       	if (sessionStorage.clickcount) {
           	setCookie(window.location.hostname + "-chkcookiealert", "1", 7);
		} else {
			setCookie(window.location.hostname + "-chkcookiealert", "1", 7);
		}
	}
}

$(document).ready(function(){
	
	//Main
	if(getCookie(window.location.hostname + "-chkcookiealert") != "1")
	{
		CreateCookiePopup();
		SlideCookieNote();
		PopUpShown();
	}	

});

function setCookie(cname, cvalue, exdays) {
  var d = new Date();
  d.setTime(d.getTime() + (exdays*24*60*60*1000));
  var expires = "expires="+ d.toUTCString();
  document.cookie = cname + "=" + cvalue + ";" + expires + ";path=/";
}

function getCookie(cname) {
  var name = cname + "=";
  var ca = document.cookie.split(';');
  for(var i = 0; i < ca.length; i++) {
    var c = ca[i];
    while (c.charAt(0) == ' ') {
      c = c.substring(1);
    }
    if (c.indexOf(name) == 0) {
      return c.substring(name.length, c.length);
    }
  }
  return "";
}

$(window).resize(function(){
	$("div#cookie_policy").css("top", ($(window).height() - $("div#cookie_policy").height()) + "px");
});