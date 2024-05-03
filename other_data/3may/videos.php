<!DOCTYPE html>
<html lang="en">

<head>
    <meta charset="utf-8">
    <meta content="width=device-width, initial-scale=1.0" name="viewport">
    <title>PTCS Entertainment</title>
    <meta content="" name="keywords">
    <meta content="" name="description">
    <link rel="icon" href="img/logo.jpg">
    <link rel="stylesheet" href="css/bootstrap.min.css" />
    <link rel="stylesheet" type="text/css" href="css/lightslider.css" />
    <link rel="stylesheet" href="css/style.css" />
    <script src="js/jquery-3.6.0.min.js"></script>
    <script src="js/bootstrap.min.js"></script>
    <script src="js/lightslider.js"></script>
    <script src="js/script.js"></script>



</head>

<body>


    <div class="welcome">
        <div class="container-flex">
            <div class="row">
                <div class="col-xs-2">
                    <div class=welcomelogin>

                        <a href="index.php"><button><b>Back</b></button> </a>
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="welcomemsg">
                        <marquee>WELCOME TO INDIAN RAILWAYS !!</marquee>
                    </div>
                </div>


            </div>
        </div>
    </div>


    <?php

include ('_add.php')

?>
    <div class="container-flex">
        <div class="row">
            <div class="movietype">

                <div class="col-xs-12">



                    <h3 class="movies_type_heading_top">
                        Bollywood videos
                    </h3>
                    <ul id="autoWidth1" class="cs1-hidden">
                        <?php
			$folderPath = 'content/poster/videos/hindi/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace([".jpg", ".png"],".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/videos/hindi/".$moviename."'>";
	  			echo "<img src='content/poster/videos/hindi/".$file."' class='model'>";
	  			echo "</a>";
	  			echo "</div>";


		   	}
			}				

	?>


                    </ul>

                </div>
            </div>
        </div>

    </div>

    <div class="container-flex">
        <div class="row">
            <div class="movietype">
                <div class="col-xs-12">
                    <h3 class="movies_type_heading_allOther">
                        Hollywood videos
                    </h3>
                    <ul id="autoWidth2" class="cs2-hidden">
                        <?php
			$folderPath = 'content/poster/videos/english/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace([".jpg", ".png"],".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/videos/english/".$moviename."'>";
	  			echo "<img src='content/poster/videos/english/".$file."' class='model'>";
	  			echo "</a>";
	  			echo "</div>";


		   	}
			}				

	?>
                    </ul>

                </div>
            </div>
        </div>
    </div>

    <div class="container-flex">
        <div class="row">
            <div class="movietype">
                <div class="col-xs-12">

                    <h3 class="movies_type_heading_allOther">
                        Regional videos
                    </h3>
                    <ul id="autoWidth3" class="cs3-hidden">
                        <?php
			$folderPath = 'content/poster/videos/regional1/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace([".jpg", ".png"],".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/videos/regional1/".$moviename."'>";
	  			echo "<img src='content/poster/videos/regional1/".$file."' class='model'>";
	  			echo "</a>";
	  			echo "</div>";


		   	}
			}				

	?>
                    </ul>
                </div>


            </div>
        </div>

    </div>
    <!---------------------------------------------------------------------------------------------------------->
    <!--<div class="container1" >-->
    <!--slider---------------->

    <?php
  include ('_footer.php');

  ?>



</body>

</html>