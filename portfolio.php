<?php

	include_once "initialize.php";

	define('PORT_DIR', __DIR__ . '/portfolio');
	
	$port_art = [];
	
	include_once "functions/get_articles.php";
	
	$port_art = get_articles(PORT_DIR, $_SESSION["language"], 0);

	if($_SESSION["language"] == "danish") {
		$filtertitle = "Filtere/Søge Indstillinger";
		$articleto = "Artikler til: ";
		$articlefrom = "Fra: ";
		$searchmethod = "Søge måde: ";
		$searchwords = "Søge ord: ";
		$searcharea = "Søge område: ";
		$wholewords = "Hele ord";
		$partialwords = "Delvis ord";
		$titlenbodytxt = "Title og brødtekst";
		$titletxt = "Title";
		$bodytxt = "Brødtekst";
		$lang = "da";
		$metakeywords = "Sandy Mortensen Wolfenbach Portefølge";
		$metadescription = "Sandy S Mortensen. Min portefølje side, hvor jeg fremviser noget af det som har eller været del af at lave, så du har et glimt af hvad jeg kan producere.";
	}
	else if($_SESSION["language"] == "english") {
		$filtertitle = "Filter/Search Settings";
		$articleto = "Article to: ";
		$articlefrom = "From: ";
		$searchmethod = "Search method: ";
		$searchwords = "Search word: ";
		$searcharea = "Search area: ";
		$wholewords = "Whole words";
		$partialwords = "Partial words";
		$titlenbodytxt = "Title and Body text";
		$titletxt = "Title";
		$bodytxt = "Body text";
		$lang = "da";
		$metakeywords = "Sandy Mortensen Wolfenbach Portefolio";			
		$metadescription = "Sandy S Mortensen. My portfolio page, where I will show some that I have made, or been part of making, so you can get a glimse of what I can produce.";
	}	
	
?>
<!DOCTYPE html>
<html lang=<?php echo $lang; ?>>
<head>
<?php
	include_once "head.php";
?>
<link rel="stylesheet" type="text/css" href="css/portblog.css">
<script src="/js/art_search.js"></script>
<script src="i18n/datepicker-da.js"></script>
<meta name="description" content="<?php echo $metadescription; ?>" />
<meta name="Keywords" content="<?php echo $metakeywords; ?>">
</head>
<body>
<?php
	include_once "header.php";
?>
<div id="container">
	<div ><h1 id="h1_in" align="center"><?php echo $portfolio; ?></h1></div>
	<div class="filter-span"><h2><?php echo $filtertitle; ?></h2></div>
	<div class="filtsetting-span">
		<label><?php echo $articleto; ?></label>
		<input class="cal-sel" id="datetoo" value="31-12-2019"></input> 
		<label><?php echo $articlefrom; ?></label>
		<input class="cal-sel" id="datefrom" value="01-01-2019"></input> 
		<select type="hidden" id="locale">
			<?php if($_SESSION["language"] == "danish"){echo '<option value="da"  >Danish</option>';} ?>
			<?php if($_SESSION["language"] == "english"){echo '<option value="" >English</option>';} ?>
		</select>
		<label><?php echo $searchmethod; ?></label>
		<select id="search_method">
			<option value="0"><?php echo $wholewords; ?></option>
			<option value="1"><?php echo $partialwords; ?></option>
		<select> 
		<label><?php echo $searchwords; ?></label>
		<input id="search_words"></input>
		<label><?php echo $searcharea; ?></label>
		<select id="search_area">
			<option value="0"><?php echo $titlenbodytxt; ?></option>
			<option value="1"><?php echo $titletxt; ?></option>
			<option value="2"><?php echo $bodytxt; ?></option>
		</select> 
	</div>
	<?php 
		$evenodd = "odd";
		foreach($port_art as $article){
			echo "<a class='art_link' href='/portfolio/" . $article["filename"] . "'>";
			echo "<div class=article>";
			echo "<img class='article_photo' src=" . $article["photo"] . ">";
			echo "<div class='article_date'>" . $article["date"] . "</div>";
			echo "<div class='article_title'><h3>" . $article["title"] . "</h3></div>";
			echo "<div class='article_intro'>" . $article["intro"] . "</div></div></a>";
		}
	?>
</div>
</body>
</html>