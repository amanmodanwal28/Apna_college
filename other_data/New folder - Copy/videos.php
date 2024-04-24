<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<link rel="icon" href="img/logo.jpg">
<title>PTCS Entertainment</title>


<link rel="stylesheet" href="css/movies_box_container.css" />
<link rel="stylesheet" href="css/style.css"/>

<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>


</head>

<body>
    <div id="marquee1" >
		<marquee width=100%>
			WELCOME TO INDIAN RAILWAYS
		</marquee>
	</div>
	


<?php 
include 'add.php';
?>
  
<!---------------------------------------------------------------------------------------------------------->
<!--<div class="container1" >-->
<!--slider---------------->

<div id="vid">


    <h3 class="movies_type_heading_top">
        Bollywood videos
    </h3>
    <div class="videoplayer">
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
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
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
<h3 class="movies_type_heading_allOther">
    Hollywood videos
</h3>
<div class="videoplayer">
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
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
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
<h3 class="movies_type_heading_allOther">
    Regional videos
</h3>
<div class="videoplayer">
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
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
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


<br>


<!--</div>-->
<?php 
//include header
include 'footer.php';

?>
<script type="text/javascript">
$(document).ready(function() {
    $('#autoWidth1').lightSlider({
        autoWidth: true,
        loop: false,
        margin: 10,
        onSliderLoad: function() {
            $('#autoWidth1').removeClass('cs1-hidden');
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#autoWidth2').lightSlider({
        autoWidth: true,
        loop: false,
        margin: 10,
        onSliderLoad: function() {
            $('#autoWidth2').removeClass('cs2-hidden');
        }
    });
});
</script>
<script type="text/javascript">
$(document).ready(function() {
    $('#autoWidth3').lightSlider({
        autoWidth: true,
        loop: false,
        margin: 10,
        onSliderLoad: function() {
            $('#autoWidth3').removeClass('cs3-hidden');
        }
    });
});
</script>
</body>

</html>