<?php
	include_once "initialize.php";
	
	if($_SESSION["language"] == "danish") {
		$article = $dk_article;
		$youarehere = "Du er her: ";
		$lang = "da";
	}
	else if($_SESSION["language"] == "english") {
		$article = $en_article;
		$youarehere = "You are here: ";		
		$lang = "en";		
	}
?>
<!DOCTYPE html>
<html lang=<?php echo $lang; ?>>
<head>
<link rel="stylesheet" type="text/css" href="/css/articles.css">
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."head.php";
?>
<script src="/js/article-cont.js"></script>
<meta name="description" content="<?php echo $article["metadescription"]; ?>" />
<meta name="Keywords" content="<?php echo $article["metasearchwords"]; ?>">
</head>
<body>
<?php
	include_once $_SERVER["DOCUMENT_ROOT"]."header.php";
?>
<div class="article-intro">
	<img class="article-img" src=<?php echo $article["photo"]?>>
	<div class="intro-text">
		<h1 id="h1_art"><?php echo $article["title"]; ?></h1>
		<p id="subhead"><?php echo $article["intro"] ?></p>
	</div>
</div>
<article id="container">
	<div><h2 id="h1_art"><?php echo $article["title"]; ?></h2></div>
	<div class="breadcrumb">
		<?php echo $youarehere; ?><a href="/index.php" target="_self"><?php echo $welcome; ?></a> > 
		<a href=<?php echo "/" . strtolower($article["category"]) . ".php"; ?> target="_self"><?php echo $article["category"]; ?></a> > 
		<?php echo $article["title"]?>
	</div>
	<div class="byline">
		<span id="date">
			<?php echo $article["date"]; ?>
		</span>
		<span id="art-type">
			<?php echo $article["category"]; ?>, 
			<?php echo $article["type"]; ?>
		</span>
	</div>
	<div id="container">
		<?php echo $article["content"]; ?>
	</div>
</article>
</body>
</html>