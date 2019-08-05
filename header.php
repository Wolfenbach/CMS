<?php 
	if($_SESSION["language"] == "danish"){
		$welcome = "Velkommen";
		$portfolio = "Portefølje";
		$blog = "Blog";
		$aboutme = "Om mig";
		$contact = "Kontakt";
	}
	else if($_SESSION["language"] == "english"){
		$welcome = "Welcome";
		$portfolio = "Portfolio";
		$blog = "Blog";
		$aboutme = "About me";
		$contact = "Contact";
	}
?>
<div id="top-container">
	<header class="top">
		<nav class="nav-left">
			<a href="/index.php"><?php echo $welcome; ?></a>
			<a href="/portfolio.php"><?php echo $portfolio; ?></a>
			<a href="/blog.php"><?php echo $blog; ?></a>
			<a href="/about.php"><?php echo $aboutme; ?></a>
			<a href="/contact.php"><?php echo $contact; ?></a>
			<a href="https://github.com/Wolfenbach/Wolfenbach" target="_blank">Git Hub</a>
		</nav>
		<nav class="nav-right">
			<a href="/index.php">Wolfenbach.dk</a>
<?php			
			if($_SESSION["language"] == "danish") {
				echo '<a id="danish"><img class="sel_lang" id="act_lang" src="/images/icons/dkflag.jpg"></a>';
				echo '<a href="?lang=english"><img class="sel_lang" src="/images/icons/ukflag.jpg"></a>';
			}
			else if($_SESSION["language"] == "english") {
				echo '<a href="?lang=danish"><img class="sel_lang" src="/images/icons/dkflag.jpg"></a>';
				echo '<a id="english" ><img class="sel_lang" id="act_lang" src="/images/icons/ukflag.jpg"></a>';
			}
?>
		</nav>
		<a href="#" onclick="menu_toggle()" class="mobile-menu-link"><div class="mobile-menu-icon"></div></a>
	</header>
</div>
<nav class="mobile-menu">
	<hr><div class="mobile-label"><a href="/index.php"><?php echo $welcome; ?></a></div>
	<hr><div class="mobile-label"><a href="/portfolio.php"><?php echo $portfolio; ?></a></div>
	<hr><div class="mobile-label"><a href="/blog.php"><?php echo $blog; ?></a></div>
	<hr><div class="mobile-label"><a href="/about.php"><?php echo $aboutme; ?></a></div>
	<hr><div class="mobile-label"><a href="/contact.php"><?php echo $contact; ?></a></div>
	<hr><div class="mobile-label"><a href="https://github.com/Wolfenbach/Wolfenbach" target="_blank">Git Hub</a></div>
	<hr>
</nav>