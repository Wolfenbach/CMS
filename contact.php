<?php

	include_once "initialize.php";
	
	if($_SESSION["language"] == "danish") {
		$youarehere = "Du er her: ";
		$social = "Sociale medier: ";
		$surname = "Fornavn*:";
		$lastname = "Efternavn*:";
		$phonenum = "Telefon Nr:";
		$emailadr = "Email Adresse*:";
		$message = "Besked*";
		$lang = "da";
		$metakeywords = "Sandy Mortensen Wolfenbach Kontakt sandy@wolfenbach.dk";
		$metadescription = "Hvis du vil i kontakt med mig, så kan du kontakte mig igennem Email eller via Linkedin, jeg kan også  kontaktes via mailen formen på denne side.";
	}
	else if($_SESSION["language"] == "english") {
		$youarehere = "You are here: ";
		$social = "Social media: ";
		$surname = "Surname*:";
		$lastname = "Lastname*:";
		$phonenum = "Phone Number";
		$emailadr = "Email address";
		$message = "Message*";
		$lang = "en";
		$metakeywords = "Sandy Mortensen Wolfenbach Contact sandy@wolfenbach.dk";
		$metadescription = "If you want to contact me, then I am availerable, through Email or Linkedin, I can also be contacted via the mail form on this page.";		
	}
	
	define('SITE_KEY', 'Recaptcha Site Key');
	define('SECRET_KEY', 'Recaptcha Secret Key');	
	
	$action = "send_form_email.php";
	
	//If the any part of the post form is filled, this code will execute, & change port form action page, if the success if false or their score is to low.
	if($_POST){
		
		function getCaptcha($SecretKey){
			$response = file_get_contents("https://www.google.com/recaptcha/api/siteverify?secret=".SECRET_KEY."&response={$SecretKey}");
			$Return = json_decode($response);
			return $Return;
		}
		$Return = getCaptcha($_POST['g-recaptcha-response']);
		//var_dump($Return);
		if($Return->success == false || $Return->score <= 0.5){
			$action = "https://google.com";
		}
	} 

?>

<!DOCTYPE html>
<html lang=<?php echo $lang; ?>>
<head>
<?php
	include_once "head.php";
?>
<link rel="stylesheet" type="text/css" href="css/contact.css">
<script src='https://www.google.com/recaptcha/api.js?render=<?php echo SITE_KEY; ?>'></script>
<meta name="description" content=<?php echo $metadescription; ?> />
<meta name="Keywords" content="<?php echo $metakeywords; ?>">
</head>
<body>
<?php
	include_once "header.php";
?>
<article id="container">
	<div ><h1 id="h1_cont"><?php echo $contact; ?></h1></div>
	<div class="breadcrumb"><?php echo $youarehere; ?><a href="index.php" target="_self"><?php echo $welcome; ?></a> > <a href="contact.php" target="_self"><?php echo $contact; ?></a></div>
	<div id="contactinfo">
		<p>
			<span class="bold">Sandy Stiven Mortensen</span></br>
			</br>
			Email: <a class="mailto" href="mailto:sandy@wolfenbach.dk">sandy@wolfenbach.dk</a></br>
			<?php echo $social; ?><a href="https://www.linkedin.com/in/sandy-mortensen-11b52933/" target="_blank">Linkedin</a>
		</p>
	</div>
	<form name="contactform" method="post" action="<?php echo $action ?>">
	<div class="row">
		<input  type="text" name="first_name" placeholder=<?php echo $surname; ?> maxlength="50" size="40">
		<input  type="text" name="last_name" placeholder=<?php echo $lastname; ?> maxlength="50" size="40">
	</div>
	<div class="row">
		<input  type="text" name="telephone" placeholder=<?php echo $phonenum; ?> maxlength="30" size="40">
		<input  type="text" name="email" placeholder=<?php echo $emailadr; ?> maxlength="80" size="40">
	</div>
	<div class="row">
		<textarea  name="comments" placeholder=<?php echo $message; ?>></textarea>
		<input type="hidden" id="g-recaptcha-response" name="g-recaptcha-response">
		<input type="hidden" id="language" name="language" value="dk">
	</div>
	<input type="submit" id="sub_btn" value="Send" <?php echo $Submitlock ?>>
	</form>

	<script type="text/javascript">
		grecaptcha.ready(function() {
			grecaptcha.execute('<?php echo SITE_KEY; ?>', {action: 'homepage'})
			.then(function(token) {
				//console.log(token);
				document.getElementById('g-recaptcha-response').value=token;
			});
		});
	</script>
</article>
</body>
</html>
