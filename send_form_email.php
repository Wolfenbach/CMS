<?php
	include_once "initialize.php";

if(isset($_POST['email'])) {
	
	// EDIT THE 2 LINES BELOW AS REQUIRED
    $email_to = "sandy@wolfenbach.dk";
    $email_subject = "Contact Email Form";
 
    function died($error) {
        // your error code can go here
        echo "We are very sorry, but there were error(s) found with the form you submitted. ";
        echo "These errors appear below.<br /><br />";
        echo $error."<br /><br />";
        echo "Please go back and fix these errors.<br /><br />";
        die();
    }
 
 
    // validation expected data exists
    if(!isset($_POST['first_name']) ||
        !isset($_POST['last_name']) ||
        !isset($_POST['email']) ||
        !isset($_POST['telephone']) ||
        !isset($_POST['comments'])	||
		!isset($_POST['language'])) {
        died('We are sorry, but there appears to be a problem with the form you submitted.');       
    }
 
    $first_name = $_POST['first_name']; // required
    $last_name = $_POST['last_name']; // required
    $email_from = $_POST['email']; // required
    $telephone = $_POST['telephone']; // not required
    $comments = $_POST['comments']; // required
	$language = strtolower($_POST['language']); // required
 
    $error_message = "";
    $email_exp = '/^[A-Za-z0-9._%-]+@[A-Za-z0-9.-]+\.[A-Za-z]{2,4}$/';
 
  if(!preg_match($email_exp,$email_from)) {
    $error_message .= 'The Email Address you entered does not appear to be valid.<br />';
  }
 
    $string_exp = "/^[A-Za-z .'-]+$/";
 
  if(!preg_match($string_exp,$first_name)) {
    $error_message .= 'The First Name you entered does not appear to be valid.<br />';
  }
 
  if(!preg_match($string_exp,$last_name)) {
    $error_message .= 'The Last Name you entered does not appear to be valid.<br />';
  }
 
  if(strlen($comments) < 2) {
    $error_message .= 'The Comments you entered do not appear to be valid.<br />';
  }
 
  if(strlen($error_message) > 0) {
    died($error_message);
  }
 
    $email_message = "Form details below.\n\n";
 
     
    function clean_string($string) {
      $bad = array("content-type","bcc:","to:","cc:","href");
      return str_replace($bad,"",$string);
    }
 
     
 
    $email_message .= "First Name: ".clean_string($first_name)."\n";
    $email_message .= "Last Name: ".clean_string($last_name)."\n";
    $email_message .= "Email: ".clean_string($email_from)."\n";
    $email_message .= "Telephone: ".clean_string($telephone)."\n";
    $email_message .= "Comments: ".clean_string($comments)."\n";
 
// create email headers
$headers = 'From: '.$email_from."\r\n".
'Reply-To: '.$email_from."\r\n" .
'X-Mailer: PHP/' . phpversion();
@mail($email_to, $email_subject, $email_message, $headers);  
?>

<?php 
	$title = "";
	$text = "";
	
	if($_SESSION["language"] == "danish") { //If the language is danish set title & text to danish
		$title = "Din email er blevet sendt";
		$lang = "da";
		$metakeywords = "Sandy Mortensen Email Send";
		$metadescription = "Tak fordi du kontaktede mig. Jeg vil svare på din email så snart som muligt. Du vil nu blive redirected tilbage til den side du var på sidst om 15 sekunder.";
		$text = 'Tak fordi du kontaktede mig. Jeg vil svare på din email så snart som muligt.</br></br>
			
			Du vil nu blive redirected tilbage til den side du var på sidst om <span id="cnt_down">15 sekunder</span></br>
			Ellers kan du klikke på linket <a id="returnurl" href="/contact.php" target="_self">her</a> for at komme tilbage igen.';
	} else if($_SESSION["language"] == "english") { //If the language is english set title & text to english
		$title = "You email has been sent";
		$lang = "en";
		$metakeywords = "Sandy Mortensen Email Send";
		$metadescription = "Thank you for contacting me, I will answer your email as soon as possible. You will now be redirected back to the page you were last on in 15 seconds.";
		$text = 'Thank you for contacting me, I will answer your email as soon as possible.</br></br>
			
			You will now be redirected back to the page you were last on in <span id="cnt_down">15 seconds</span></br>
			Or you can click on the link <a id="returnurl" href="/contact.php" target="_self">here</a> to return to that page.';
	} else {
		$title = "An error occured";
		$text = 'Language is undefined Click <a id="returnurl" href="/contact.php" target="_self">here</a> to return';
	}
?>

<!-- include your own success html here -->

<!DOCTYPE html>
<html lang=<?php echo $lang; ?>>
<head>
<link rel="stylesheet" type="text/css" href="css/send.css">
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
	<div ><h1 id="h1_cont"><?php echo $title; ?></h1></div>
	<div class="article">
		<p>
			<?php echo $text; ?>
		</p>
	</div>
</article>
<script type="text/javascript" src="/js/redirect-cnt.js" async></script>
</body>
</html> 
 
<?php
}
?>