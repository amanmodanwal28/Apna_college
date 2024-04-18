<?php 
//include header
include 'headermovie.php';
include 'welcome1.php';
include 'add.php';
?>

<!---------------------------------------------------------------------------------------------------------->
<!--<div class="container1" >-->
<!--slider---------------->


<div id="vid">


    <h3 style="padding-top: 60px; font-size: 33px;
	font-family: Arial, Helvetica, Sans-Serif;
	font-style: italic;
	font-weight: bold; text-align:center;">
        Type1 videos
    </h3>
    <div class="videoplayer">
        <ul id="autoWidth1" class="cs1-hidden">
            <?php
			$folderPath = 'content/poster/kidszone/type1/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/kidszone/type1/".$moviename."'>";
	  			echo "<img src='content/poster/kidszone/type1/".$file."' class='model'>";
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
    Type2 videos
</h3>
<div class="videoplayer">
    <ul id="autoWidth2" class="cs2-hidden">
        <?php
			$folderPath = 'content/poster/kidszone/type2/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/kidszone/type2/".$moviename."'>";
	  			echo "<img src='content/poster/kidszone/type2/".$file."' class='model'>";
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
    Type3 videos
</h3>
<div class="videoplayer">
    <ul id="autoWidth3" class="cs3-hidden">
        <?php
			$folderPath = 'content/poster/kidszone/type3/';
			// Read all files in the folder
			$files = scandir($folderPath);

			// Iterate over each file
			foreach ($files as $file) {
		    // Exclude current directory (.) and parent directory (..)
		    if ($file !== '.' && $file !== '..') {
		        // Process the file
		
		    	$moviename=str_replace(".jpg",".mp4","$file");
	   			echo "<div class='box'>";
				echo "<a href='loadmovie.php?mname=content/kidszone/type3/".$moviename."'>";
	  			echo "<img src='content/poster/kidszone/type3/".$file."' class='model'>";
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