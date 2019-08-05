<?php

session_start();
if(!isset($_SESSION["language"])) {
    // session isn't started
	$_SESSION["language"] = "danish";
}

$querys = explode("&", $_SERVER['QUERY_STRING']);

foreach($querys as $query){
	if($query == "lang=english")
		$_SESSION["language"] = "english";
	else if($query == "lang=danish")
		$_SESSION["language"] = "danish";
}
?>