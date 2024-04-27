		<?php
			$folderPath = 'content/poster/movies/bollywood/';
			// Read all files in the folder
			
			$response=array();
			$response1=array();
			$files = scandir($folderPath);
			$counter=0;
			// Iterate over each file

			header("Content-Type:JSON");

			foreach ($files as $file) {

		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
	  			$response1[$counter]['moviename']=$file;
	  			$counter++;
		   	}
			}
				$response[0]['bollywood']=$response1;	
				$folderPath = 'content/poster/movies/hollywood/';
			// Read all files in the folder
			$response2=array();
			$files = scandir($folderPath);
			$counter=0;
			// Iterate over each file

			header("Content-Type:JSON");

			foreach ($files as $file) {

		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
	  			$response2[$counter]['moviename']=$file;
	  			$counter++;
		   	}
			}	
			$response[1]['hollywood']=$response2;	
			$folderPath = 'content/poster/movies/regional1/';
			// Read all files in the folder
			$response3=array();
			$files = scandir($folderPath);
			$counter=0;
			// Iterate over each file

			header("Content-Type:JSON");

			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
	  			$response3[$counter]['moviename']=$file;
	  			$counter++;
		   	}
			}	
			$response[2]['regional1']=$response3;	
			echo json_encode($response,JSON_PRETTY_PRINT)			
	?>