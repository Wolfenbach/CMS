<?php
	include_once "initialize.php";
	
	if($_SESSION["language"] == "danish") {
		$youarehere = "Du er her: ";
		$lang = "da";
		$metakeywords = "Sandy Mortensen Wolfenbach Kontakt Programmør Zitcom Dandomain Domain Webhotel Webhoteller Webshop C C# PHP Q/A testning software spil";
		$metadescription = "Mit navn er Sandy Stiven Mortensen. Jeg er en autodidakt udvikler, hvor jeg har både fødderne i webudvikling og software udvikling.";
		$bodyart = '		<img class="profil" src="images/Profil1-250x250.png">		
		<h2>Introduktion</h2>
		<p>
		Mit navn er Sandy Stiven Mortensen.</br></br>
		
		Jeg er en autodidakt udvikler, hvor jeg har både fødderne i webudvikling og software udvikling, med erfaring med sprogene C, C#.net og PHP.</br></br>
		
		Årsagen jeg har valgt at udvikle en portefølge hjemmeside er fordi det er ikke altid lige nemt at vise en hvad man har lavet før,
		pga man skal opholde ens NDA, eller man ikke har adgang til at vise kode, da firmaet man arbejde for ejer det eller pga sikkerhedsmæssige hensyn.</br></br>
		
		Det er hvor denne side bliver løsningen for dette problem, hvor jeg kan fremvise hvad det er jeg kan tilbyde.</br>
		
		Foruden at siden fungere som en portefølge, vil siden også fungere som en vidensdeling side, hvor besøgende også kan lære noget af det jeg har lært,
		så de får noget ud af deres tid at være her.</br>
		</p>
		<h2>Arbejdsmetode</h2>
		<p>
		Når jeg får en opgave med en problemformulering, tager jeg opgavens omfang, og deler det op i mindre dele, for at gøre projektet mere overskueligt, men det giver mig også mulighed for at løse det samlede problem, ved at løse del problemerne.</br></br>
		Skulle der på noget tidspunkt opstå et problem som man ikke kan løse, vil jeg isolere problemet og opløse til mindre stykker, for at nemmere at kunne løse det specifikke problem.</br>
		</p>
		<h2>Ekstern portefølge</h2>
		<p>
		Men der er nogle ting som jeg kan vise frem som jeg har lavet, som jeg kan præsentere.</br></br>
		
		Hos Dandomain fik jeg en opgave at lave en popup funktion til Dandomain Webshop system, med en dokumentation af hvordan man bruges, du kan finde den <a href="https://support.dandomain.dk/webshoppopup-vindue-opsaetnings-guide/" target="_blank">her.</a></br></br>
		
		En anden opgave var blot at lave en meget simple countdown timer for en kunde, jeg kan desværre ikke vise dokumentationen, da den er intern guide, men har en ligende funktion på min kontaktside, så hvis du sender mig en email, tæller den ned, og sender dig tilbage igen, du finder kontaktsiden <a href="http://wolfenbach.dk/contact.php" target="_blank">her.</a></br></br>
		
		Produceren Daniel Grayshon fra <a href="https://www.nightdivestudios.com/" target="_blank">Nightdive Studios</a> kontaktet mig hvor jeg så blev en af deres Q/A testere af Singleplayer og Multiplayer for Forsaken Remastered, hvor mit navn står skrevet i deres kredit i spillet, for interresseret kan det findes på steam <a href="https://store.steampowered.com/app/668980/Forsaken_Remastered/" target="_blank">her.</a> eller på gog <a href="https://www.gog.com/game/forsaken" target="_blank">her.</a></br>
		</p>
		<h2>Om sidens artikler</h2>
		<p>
		Som tidligere nævnt vil hjemmesiden her fungere som en del af portefølgen, med artikler som præsentere hvad jeg har lavet, samt at den fungere som en blog.</br></br>
		
		Portefølge artiklerne sektionen vil indeholde nedestående elementer, for hvordan mindre eller større projekter er blevet løst.
		<ul>
			<li>Det overstående problem stilling.</li>
			<li>Fremgangsmåde for at løse problemet.</li>
			<li>Skrivningen af koden.</li>
			<li>Gennemgang af koden.</li>
			<li>Præsentation af kodens funktionalitet, samt et link til Github.</li>
		</ul>
		
		<p>Blog artiklerne sektionen vil enten omhandle opdatering af siden, omhandle min egen udvikling, ellers vil de indeholde teoretisk material, med elementerne vist forneden.</br>
		<ul>
			<li>Hver blog vil starte med hvilken niveau læseren forventes at være på, og hvis ikke anbefaling at prøve at gennem gå, for at få noget ud af bloggen.</li>
			<li>Introduktion til det teoretisk materiale.</li>
			<li>Eksempler på hvad det teoretiske materiale kan bruges til.</li>
			<li>Hvis muligt vil der være programmer som kan fremevise eksemplerne, med link til Github.</li>
		</ul>';
	}
	else if($_SESSION["language"] == "english") {
		$youarehere = "You are here: ";
		$lang = "en";
		$metakeywords = "Sandy Mortensen Wolfenbach Kontakt Programmer Zitcom Dandomain Domain Webhotel Webhotels Webshop C C# PHP Q/A testing software games";
		$metadescription = "My name is Sandy Stiven Mortensen. I am an autodidact developer, who has experience in both web development & software development.";		
		$bodyart = '		<img class="profil" src="images/Profil1-250x250.png">
		<h2>Introduction</h2>
		<p>
		My name is Sandy Stiven Mortensen.</br></br>
		
		I am an autodidact developer, who has experience in both web development & software development, the following languages is what I have experience with C, C#.net & PHP.</br></br>
		
		The reason I choose to develop a portfolio website, is because it´s not always easy to show your previous work, because you have to avoid breaking NDA´s, or if you don´t have access to show the code, because the company you work for owns it, & because of security reasons.</br></br>
		
		This where this site will be solution to my problem, where I can show what it is that I can offer.</br>
		
		Besides the site functioning as a portfolio, it will also be knowledge sharing site, where visitors will hopefully also be able to learn something that I have learned,
		so they get something out of being on the site.</br>
		</p>
		<h2>Work method</h2>
		<p>
		When I get an assignment with a problem definition, then I will take the scope of the task, & break it up into smaller problems to make the project as easy to manage, which in turn allows me solves the overall problem, by solving each of the smaller problems.</br></br>
		
		Should one of the smaller problems prove to hard to solve, then I isolatede problem & disolve it into further smaller parts, to easier solve that specific problem.</br>
		</p>
		<h2>External portfolio</h2>
		<p>
		But there are some things that I can show, that I have been part of making, which I can present.</br></br>
		
		At Dandomain I was tasked to create a popup function for Dandomain Webshop system, with a dokumentation on how to use it, you can find it <a href="https://support.dandomain.dk/webshoppopup-vindue-opsaetnings-guide/" target="_blank">here.</a></br></br>
		
		Another assignment was a just to make a simple countdown timer for a customer, I can sadly not show it, since it´s in an internal guide, but I have  a similar function on my contact page, after the formmail has been sent it will then countdown, & send you back to the contact page, you can find the contact page <a href="http://wolfenbach.dk/contact.php" target="_blank">here.</a></br></br>
		
		The Producer Daniel Grayshon from <a href="https://www.nightdivestudios.com/" target="_blank">Nightdive Studios</a> contacted me, where I became one of their Q/A testers for the Singleplayer & Multiplayer portions of the game Forsaken Remastered, where my name is in the credits, if you are interrested then you can find it on steam <a href="https://store.steampowered.com/app/668980/Forsaken_Remastered/" target="_blank">here.</a> or on gog <a href="https://www.gog.com/game/forsaken" target="_blank">here.</a></br>
		</p>
		<h2>About the articles pages</h2>
		<p>
		As mentioned previous the website will function as part of my portfolio,, with articles that presents what I am capable of making, along with a blog section.</br></br>
		
		The Portfolio articles section will contain the following elements below, to solve a smaller or larger project.
		<ul>
			<li>Overall problem definition.</li>
			<li>Methodology used to solve the problem.</li>
			<li>Writing the code.</li>
			<li>Code review.</li>
			<li>Presentation of the codes functionalitet, along with a link to Github.</li>
		</ul>
		
		<p>The Blog article section will be about updates on the site or be about myself regarding my own development, or theoretical material, with the elements below.</br>
		<ul>
			<li>Each blog will start which level the reader is expected to be, & if not it´s not recommend material to study, to be able to benefit from the blog.</li>
			<li>Introduction to the teoretical material.</li>
			<li>Examples on what the theoretical material can be used for.</li>
			<li>If possible will there be programs which can show the example, with a link to Github.</li>
		</ul>';
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