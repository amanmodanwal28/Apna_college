<?php 
//include header
include 'headermovie.php';
include 'welcome1.php';
include 'add.php';
?>

<div id="vid">

    <h3 style="font-size: 33px;
	font-family: Arial, Helvetica, Sans-Serif;
	font-style: italic;
	font-weight: bold; text-align:center;padding-top: 60px;">
        Bollywood Movies
    </h3>
    <div class="videoplayer">
        <ul id="autoWidth1" class="cs1-hidden">
            <?php
			$folderPath = 'content/poster/movies/bollywood/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/movies/bollywood/".$moviename."'>";
	  			echo "<img src='content/poster/movies/bollywood/".$file."' class='model'>";
	  			echo "</a>";
	  			echo "</div>";
		   	}
			}				

	?>

        </ul>
    </div>
</div>
<h3 style=" font-size: 33px;
	font-family: Arial, Helvetica, Sans-Serif;
	font-style: italic;
	font-weight: bold; text-align:center;">
    Hollywood Movies
</h3>
<div class="videoplayer">
    <ul id="autoWidth2" class="cs2-hidden">
        <?php
			$folderPath = 'content/poster/movies/hollywood/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/movies/hollywood/".$moviename."'>";
	  			echo "<img src='content/poster/movies/hollywood/".$file."' class='model'>";
	  			echo "</a>";
	  			echo "</div>";


		   	}
			}				

	?>

    </ul>
</div>
</div>
<h3 style=" font-size: 33px;
	font-family: Arial, Helvetica, Sans-Serif;
	font-style: italic;
	font-weight: bold; text-align:center;">
    Regional Movies
</h3>
<div class="videoplayer">
    <ul id="autoWidth3" class="cs3-hidden">
        <?php
			$folderPath = 'content/poster/movies/regional1/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/movies/regional1/".$moviename."'>";
	  			echo "<img src='content/poster/movies/regional1/".$file."' class='model'>";
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