<?php 

	/*
	 *    Programmer: Sandy Stiven Mortensen            Created date: February 17, 2019
	 *
	 *    Gets articles from a given directory, that is returned into an array
	*/
	
	/*Function get_articles has 3 parameters:
		dirstring is a string that indicates directory where the articles are located, 
		artlimit is a int that determins how many articles it should get, if set to 0 then there is no limit.
	*/
	
	//includes the function read_articles so it can be used
	include_once "functions/read_article.php";
	
	function get_articles($dirstring, $artlimit){
		
		//declares articles as an empty array
		$articles = [];
		
		//checks first if the directory exists, if it does, it conteniues with the rest of the algoritme, if not outputs a console with error msg 'Scandir String: Path does not exist'
		if(is_dir($dirstring)){
			
			//directory array is stored in cdir
			$cdir = scandir($dirstring, 0);
			//cuts of the last 2 arrays as they are the previous directory or root directory information.
			$cdir = array_slice($cdir, 2, count($cdir));
			
			//if Artlimit is not Zero & cdir array elements count are later then artlimit, then limit amount of cdir array elements to artlimit value
			if($artlimit != 0 && count($cdir) > $artlimit)
				$cdir = array_slice($cdir, 0, $artlimit);
			
			//foreach cdir element is assigned to variable dir, & do the following algorithme within the scope.
			foreach($cdir as $dir){
				
				//Function which reads the article file & adds the information onto the array.
				$articles[] = read_article($dirstring, $dir);
				
			}
		} else {
			echo "<script>console.log( 'Scandir String: Path does not exist' );</script>";
		}
	 
		return $articles;
	}
?>
