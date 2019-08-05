<?php

	include_once "initialize.php";

	if($_SESSION["language"] == "danish") {
		$title = "Velkommen";
		$blogarticle = "Blog artikler";
		$aboutmetxt = "Du kan læse lidt om mig her, om hvem jeg er, og hvad jeg har lavet tidligere.</br></br>Hvad jeg bruger noget af mine fritid produktivt.";
		$contacttxt = "Du kan finde mine kontakt informationer her, samt en mail form.</br></br>Så skal jeg gerne svare tilbage til dig, så hurtigt som muligt.";
		$lang = "da";
		$metadescription = "Velkommen til min hjemmeside, siden her vil fungere som en portefølje og som en blog. Så du vil kunne danne dig et indtryk i hvad jeg kan lave for dig.";
		$metakeywords = "Sandy Mortensen Wolfenbach Velkommen Portefølje Blog Om mig Kontakt Github";
	}
	else if($_SESSION["language"] == "english") {
		$title = "Welcome";
		$blogarticle = "Blog articles";
		$aboutmetxt = "Here you can read a bit about me, who I am, and what I have previously created .</br></br>What I use some of my sparetime productively.";
		$contacttxt = "Here you can find my contact information, along with a email form.</br></br>I will reply as soon as I can, when I receive your email.";
		$lang = "en";
		$metadescription = "Welcome to my website, the page here will function as a portfolio, and as a blog. So you will be able to create an impression on what I can do for you.";
		$metakeywords = "Sandy Mortensen Wolfenbach Welcome Portfolio Blog About Contact Github";		
	}
	
	define('PORT_DIR', __DIR__ . '/portfolio');
	define('BLOG_DIR', __DIR__ . '/blog');
	
	$port_art = [];
	$blog_art = [];
	$evenodd = "";
	
	include_once "functions/get_articles.php";
	
	function evenodd($evenodd){
		$evenodd == "odd" ? $evenodd = "even": $evenodd = "odd";
		
		return $evenodd;
	}
	
	$port_art = get_articles(PORT_DIR, $_SESSION["language"], 10);
	$blog_art = get_articles(BLOG_DIR, $_SESSION["language"], 10);
	
?>
<!DOCTYPE html>
<html lang=<?php echo $lang; ?>>
<head>
<?php
	include_once "head.php";
?>
<link rel="stylesheet" type="text/css" href="css/frontpage.css">
<meta name="description" content="<?php echo $metadescription; ?>" />
<meta name="Keywords" content="<?php echo $metakeywords; ?>">
</head>
<body>
<?php

	include_once "header.php";
	
	/*var_dump($port_art);
	var_dump($blog_art);*/
?>
<div id="container">
	<div ><h1 id="h1_in"><?php printf($title); ?></h1></div>
	<div class="columns" id="column-1">
		<div class="title"><a href="portfolio.php"><?php echo $portfolio; ?></a></div>
		<div class="column-container">
			<?php 
				$evenodd = "odd";
				foreach($port_art as $article){
						echo "<a href='/portfolio/" . $article["filename"] . "'>";
						echo "<div class=article_" . $evenodd . ">";
						echo "<img class='article_photo' src=" . $article["photo"] . ">";
						echo "<div class='article_date'>" . $article["date"] . "</div>";
						echo "<div class='article_title'><h3>" . $article["title"] . "</h3></div>";
						echo "<div class='article_intro'>" . $article["intro"] . "</div></div></a>";
						$evenodd = evenodd($evenodd);
				}
			?>
		</div>
	</div>
	<div class="columns" id="column-2">
		<div class="title"><a href="blog.php"><?php echo $blogarticle; ?></a></div>
		<div class="column-container">
			<?php 
				$evenodd = "odd";
				foreach($blog_art as $article){
						echo "<a href='/blog/" . $article["filename"] . "'>";
						echo "<div class=article_" . $evenodd . ">";
						echo "<img class='article_photo' src=" . $article["photo"] . ">";
						echo "<div class='article_date'>" . $article["date"] . "</div>";
						echo "<div class='article_title'><h3>" . $article["title"] . "</h3></div>";
						echo "<div class='article_intro'>" . $article["intro"] . "</div></div>";
						$evenodd = evenodd($evenodd);
				}
			?>
		</div>
	</div>

	<div class="columns" id="column-3">
		<div class="content-box">
			<div class="title"><a href="about.php"><?php echo $aboutme; ?></a></div>
			<a href="about.php" target="_blank"><div class="content" id="about_box"><p><?php echo $aboutmetxt; ?></p></div></a>
		</div>
		<div class="content-box">
			<div class="title"><a href="contact.php"><?php echo $contact; ?></a></div>
			<a href="contact.php" target="_blank"><div class="content" id="contact_box"><p><?php echo $contacttxt; ?></p></div></a>
		</div>
		<div class="content-box">
			<a href="https://github.com/Wolfenbach/" target="_blank"><div class="content" id="github_box"><img id="githublogo" src="/graphics/GitHubLogo.png"></div></a>
		</div>
	</div>
</div>
</body>
</html>
