
<meta charset="utf-8" />
<title>Wolfenbach.dk - Portfolio Website</title>
<script src="/jquery/jquery-3.3.1.js"></script>
<script src="https://code.jquery.com/ui/1.12.1/jquery-ui.js"></script>
<script src="/js/menu-toggle.js"></script>
<script src="/js/cookie_alert.js"></script>
<!-- Global site tag (gtag.js) - Google Analytics -->
<script async src="https://www.googletagmanager.com/gtag/js?id=UA-135012566-1"></script>
<script>
  window.dataLayer = window.dataLayer || [];
  function gtag(){dataLayer.push(arguments);}
  gtag('js', new Date());

  gtag('config', 'UA-135012566-1');
</script>
<link rel="stylesheet" type="text/css" href="/css/main.css">
<link href="https://fonts.googleapis.com/css?family=Roboto" rel="stylesheet">
<link rel="stylesheet" href="//code.jquery.com/ui/1.12.1/themes/base/jquery-ui.css">
<meta name="viewport" content="width=device-width, initial-scale=1">
<?php 

	function get_URI($URL){
		
		$URL = explode("?", $URL);
		
		return $URL[0];
	}

	if(strlen($_SERVER['QUERY_STRING']) > 0) {
		echo '<link rel="canonical" href="http://wolfenbach.dk' . get_URI($_SERVER["REQUEST_URI"]) . '" />';
	}
		
?>