<?php

	/*
	 *    Programmer: Sandy Stiven Mortensen            Created date: February 17, 2019
	 *
	 *    Reads a specific file in a specific directory, & gets the relavant information from the article depending on the language
	*/

	/*Function gread_article has 2 parameters:
		dirstring is a string that indicates directory where the articles are located, 
		dir is a string that indicates the file name in the directory.
	*/
	
	function read_article($dirstring, $dir){
		
		//read the file in the directory dirstring, with the filename dir into variable file
		$file = fopen($dirstring . "/" . $dir, 'r');

		//dir declared as an array element of article with the name "filename"
		$article["filename"] = $dir;
				
		//If we haven't reached the end of file, then
		if(!feof($file)){
				
			//skips portions of the file depending on the language else outputs console error msg 'Language String: Unknown language'
			if($_SESSION["language"] == "danish") {
				for($n = 0; $n < 4; $n++)
					fgets($file);
				}
			else if($_SESSION["language"] == "english") {
				for($n = 0; $n < 16; $n++)
					fgets($file);
			} else {
				echo "<script>console.log( 'Language String: Unknown language' );</script>";
			}
				
			//each following line dir is declared as a new element of the array article.
			$article["title"] = substr(fgets($file), 14, -3);
			$article["intro"] = substr(fgets($file), 14, -3);
			$article["photo"] = substr(fgets($file), 14, -3);
			$article["date"] = substr(fgets($file), 13, -3);
		}
				
		//closes the file
		fclose($file);
	
		//returns article array
		return $article;
	}			
?>
