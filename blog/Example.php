<?php
	//Sets the content of the article
	//danish article
	$dk_article = [
		"title" => "Danish Title",
		"intro" => "Danish byline",
		"photo" => "/images/adventure.jpg",
		"date" => "Jan 1, 2019",
		"category" => "Blog",
		"type" => "Type",
		"metasearchwords" => "Search Words for google",
		"content" => "Danish article content",
		"metadescription" => "Danish byline as metatext",
	];
	//english article
	$en_article = [
		"title" => "English Title",
		"intro" => "English Byline",
		"photo" => "/images/adventure.jpg",
		"date" => "Jan 1, 2019",
		"category" => "Blog",
		"type" => "Type",
		"metasearchwords" => "Search Words for google",
		"content" => "English article content",
		"metadescription" => "Danish byline as metatext",
	];	
	
?>
<?php 
	//includes the article boilerplate to show the article
	include_once "../articleform.php";
?>
