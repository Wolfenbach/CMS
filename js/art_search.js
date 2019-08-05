/*
 *    Programmer: Sandy Stiven Mortensen            Created date: January 3, 2019
 *
 *	  Controls the colour patterns on the portfolio & blog pages, if the width is equal or over 1200 pixels,
 *	  2 columns is shown & it needs to display the grey & blue artitle colours in a wave pattern.
 *
 *	  If it's below 1200 pixles one column is shown & it needs to display the grey & blue artiles,
 *	  in an alternating pattern instead.
 */

//Checks the value of n & returns 0 if even num, & 1 if odd num
function get_evenodd(n) {	

	n = (n % 2) == 0 ? 0: 1;
	
	return n;
}

//Sets all visible articles left & right margin
function set_margin() {
	
	var n = 0;
	
	$('.article').each(function() {
		
		if($(this).parent().css('display') != 'none') {
			
			if(get_evenodd(n) == 0) {
				
				$(this).css('margin-right', '10px');
				$(this).css('margin-left', ' 0px '   );

			} else {
				
				$(this).css('margin-right', '0px');
				$(this).css('margin-left', '10px');
			}
			
			n++;
		}
		
	});
}

//Sets the articles left & right margin back down to 0
function unset_margin() {
	
	$('.article').css('margin-right', '0px');
	$('.article').css('margin-left', '0px');
	
}

//Function that colours all visible articles in a wave pattern.
function make_wave_pattern() {
	
	//variable which is used to expect if a number is even(0) or odd(1), starts trying to expect an odd number.
	var exp_evenodd = 1;
	var n = 0;
	
	//For each article it checks checks if article is even, & colours it accordingly, & adds 1 to n.
	$('.article').each(function() {
		
		if($(this).parent().css('display') != 'none') {
			
			if(get_evenodd(n) == 0) {
				
				$(this).css('background-color', '#ebebeb');
				$(this).css('background-image', 'url("/graphics/grycrnr.png")');
				
			} else {
				
				$(this).css('background-color', '#e4ecfb');
				$(this).css('background-image', 'url("/graphics/blcrnr.png")');
				
			}
			
			/*checks if the value n is the expected odd or even number, if the number n is the expected odd or even number, it adds an additional 1 to n, which creates the wave pattern,
			  then swaps the expected value even(0) to odd(1) & vice versa. */
			if(get_evenodd(n) == exp_evenodd) {
				
				exp_evenodd = exp_evenodd == 1 ? 0 : 1;
				n++;
				
			}
			
			n++;
		}
		
	});
	
}

//Function that colours all visible articles in a alternating pattern.
function make_alt_pattern() {
	
	var n = 0;
	
	//For each article it checks checks if article is even, & colours it accordingly, & adds 1 to n.
	$(".article").each(function() {
		
		if($(this).parent().css("display") != "none") {
			
			if(get_evenodd(n) == 0) {
				
				$(this).css("background-color", "#e4ecfb");
				$(this).css("background-image", "url('/graphics/blcrnr.png')");
				
			} else {
				
				$(this).css("background-color", "#ebebeb");
				$(this).css("background-image", "url('/graphics/grycrnr.png')");
				
			}
			
			n++;
		}
		
	});
}

//Gets the date in milliseconds compadible with danish & english timestamps.
function get_date(e) {
	
	if($(e).val().substring(2, 3) == "-") {
		return new Date(($(e).val().substring(3, 5) + "-" + $(e).val().substring(0, 2) + "-" + $(e).val().substring(6))).getTime();
	} else {
		return new Date($(e).val()).getTime();
	}
	
}

//Hides articles that is not within dfrom to dtoo values
function date_filter() {
	
	var dfrom = get_date("#datefrom");
	var dtoo = get_date("#datetoo");
		
	$(".article").find(".article_date").text(function() {
		
		var d = new Date($(this).text().toLowerCase()).getTime();
			
		if(d < dfrom || d > dtoo) {
			$(this).parent().parent().css("display", "none");
		} else {
			$(this).parent().parent().css("display", "unset");	
		}	
	});
	
}

//function that converts the search word string into array of strings, for each seperate word
function get_search_words() {
	
	var n = 0;
	var m = 0;
	var search_words = [];
	var delim = "";
	
	if($("#search_method").val() == 0)
		delim = " ";
	
	for(n = 0; n < $("#search_words").val().length; n++) {
		if($("#search_words").val().substring(n, n + 1) == " ") {
			search_words[search_words.length] = delim + $("#search_words").val().substring(m, n) + delim;
			m = n + 1;	
		}
	}
	
	if($("#search_words").val().substring(m, n + 1) != " " && $("#search_words").val().substring(m, n + 1) != "") {
		
		search_words[search_words.length] = delim + $("#search_words").val().substring(m, n + 1) + delim;
	}
	
	return search_words;
}

//Checks if the search word is in the string, returns 1 for true, & 0 for false
function scanstring(string, search_word) {
	
	var n = 0;
	
	for(n = 0; n <= (string.length - search_word.length); n++) {
		if(string.substring(n, n + search_word.length) == search_word) {
			return 1;
		}
	}
	
	return 0;
}

//Runs the function scanstring, through each article, searching through relevant texts areas, & returns the flag value.
function find_words(e, search_words) {
	
	var flag = 0;
	var n = 0;
	var delim = "";
	var title = "";
	var intro = "";
	
	if($("#search_method").val() == 0)
		delim = " ";
	
	title = delim + e.find(".article_title").text() + delim;
	intro = delim + e.find(".article_intro").text() + delim;
	
	for(n = 0; n < search_words.length && flag != 1; n++) {
		
		if(($("#search_area").val() == 0 || $("#search_area").val() == 1) && flag != 1) {
			flag = scanstring(title, search_words[n]);
		}
		if(($("#search_area").val() == 0 || $("#search_area").val() == 2) && flag != 1) {
			flag = scanstring(intro, search_words[n]);
		}
	}
	
	return flag;
}

//Hides articles that does not match with the search word
function word_filter() {
	
	var search_words = [];
	
	search_words = get_search_words();
	
	if(search_words.length > 0) {
		$(".article").each(function() {		
			if(find_words($(this) ,search_words) == 0)
				$(this).parent().css("display", "none");	
		});
	}
}

//Algorithme that controls functions that filters articles & sets up the order of the article pattern colour
function filter_alg() {
	
	date_filter();
	
	word_filter();
	
	if($(window).width() >= 1200) {
		make_wave_pattern();
		set_margin();
	} else {
		make_alt_pattern();
		unset_margin();	
	}
	
}

//Calls either to make a wave pattern or alt pattern depending on the window size, when the page has been loaded.
$(document).ready(function() {
	
	var old_val = "";
	
	filter_alg();

	$("input.cal-sel").on("keydown", function() {
		if(old_val == "")
			old_val = $(this).val();
	});
	
	$("input.cal-sel").on("keyup", function() {
		$(this).val(old_val);
		old_val = "";
	});

	$("input.cal-sel").change(function() {
		filter_alg();
	});

	$("#search_method, #search_area").change(function() {
		filter_alg();
	});
	
	$("#search_words").on("keyup", function() {
		filter_alg();
	});
	
	if($("#locale").find("option").val() == "dk") {
		
	}
	//Converting date format for specific countries
	else if($("#locale").find("option").val() == "en") {
		$("#datetoo").attr("value", "12/31/2019");
		$("#datefrom").attr("value", "01/01/2019");
	}
	
});

//Calls either to make a wave pattern or alt pattern depending on the window size, when the window is being resized.
$( window ).resize(function() {
	
	if($(window).width() >= 1200) {
		make_wave_pattern();
		set_margin();
	} else {
		make_alt_pattern();
		unset_margin();	
	}
	
});

//Function from jquery UI which controls the datepicker
$(function() {
	
	$("input.cal-sel").datepicker();
	
	$("input.cal-sel").datepicker("option",
		$.datepicker.regional[$("#locale").val() ] );
		
});
