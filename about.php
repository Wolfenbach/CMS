<?php
	include_once "initialize.php";
	
	if($_SESSION["language"] == "danish") {
		$youarehere = "Du er her: ";
		$lang = "da";
		$metakeywords = "Search Words for google";
		$metadescription = "Danish metatext";
		$bodyart = '		Insert Photo html here">		
		<h2>Danish Title</h2>
		Danish article content';
	}
	else if($_SESSION["language"] == "english") {
		$youarehere = "You are here: ";
		$lang = "en";
		$metakeywords = "Search Words for google";
		$metadescription = "English metatext";		
		$bodyart = '		Insert Photo html here">
		<h2>English Title</h2>
		English article content';
	}
	
?>
<!DOCTYPE html>
<html lang=<?php echo $lang; ?>>
<head>
	<link rel="stylesheet" type="text/css" href="css/about.css">
	<?php
		include_once "head.php";
	?>
<meta name="description" content="<?php echo $metadescription; ?>" />
<meta name="Keywords" content="<?php echo $metakeywords; ?>">
</head>
<body>
<?php
	include_once "header.php";
?>
<article id="container">
	<div ><h1 id="h1_cont"><?php echo $aboutme; ?></h1></div>
	<div class="breadcrumb"><?php echo $youarehere; ?><a href="index.php" target="_self"><?php echo $welcome; ?></a> > <a href="about.php" target="_self"><?php echo $aboutme; ?></a></div>
	<div class="article">
		<?php echo $bodyart; ?>
	</div>
</article>
</body>
</html>