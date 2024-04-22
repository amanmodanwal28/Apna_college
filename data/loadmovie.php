<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<link rel="icon" href="img/logo.jpg">
<title>PTCS Entertainment</title>
<link rel="stylesheet" href="css/styel.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
<link rel="stylesheet" href="css/silderstyel.css"/>
<link rel="stylesheet" href="css/loadmovie.css"/>


<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>

<style>
* {
  box-sizing: border-box;
}

</style>
</head>
<body style="     background: linear-gradient(to right, #ff9933 0%, #33ccff 100%);">
   <div id="marquee1" style="overflow:hidden; left:1px; top:15px; width:device-width;  z-index:1 ;margin-top: 30px;"  >
   	<div class="backhome" style="float: left; width: 18%;">
   		<?php
    $nametype=$_GET['mname'];
      $nametype=substr($nametype, 8,strlen($nametype));
      $nametype=substr($nametype, 0,strpos($nametype, "/"));
      echo "<a href='".$nametype.".php'><button type=''  style='width: 100%;height: 48px;	background: linear-gradient(to  left, #ff9933 0%, #33ccff 100%);'><b>Back</b></button> </a>";
  ?>
		           

	</div>
	<div class="scroll " style="float: left;width: 82%">
		
		<marquee width=100%>
	<div class="wpmd">
	<div><font color="#4A274F" face="@Meiryo" class="ws28" align:center><B><I> WELCOME TO INDIAN RAILWAYS !!</I></B></font></div>
	</div></marquee>
	</div>
	</div>
	


<?php 

include 'add.php';
?>

<div id="main">
    <div class="left">

        <h1>
            Requested content
        </h1>
        <div class="videoplayer">
            <?php
            $moviename=$_GET['mname'];
            echo "<video width='100%' height='auto' controlsList='nodownload'   controls  ";
            echo "<source src='".$moviename."' type='video/mp4'>";
            echo "</video>";
?>

            <div id="moviename">
                <?php
      $moviename2=$_GET['mname'];
      $songtype1=substr($moviename2,strripos($moviename2, "/")+1,strlen($moviename2));
          echo "<h1>";
          echo rtrim($songtype1,".mp4");

          echo "</h1>";
         
            ?>


            </div>
        </div>
    </div>
    <div class="right">
        <h1>
            Related content
        </h1>
        <ul id='song-list'>

            <ul id="playlistItems">
                <div class="videoplayer">
                    <?php
    $moviename1=$_GET['mname'];

      $songtype=substr($moviename1, 8,strripos($moviename1, "/")-7);
      $folderPath = "content/poster/".$songtype."";      // Read all files in the folder
      $files = scandir($folderPath);

      // Iterate over each file
      foreach ($files as $file) {
        // Exclude current directory (.) and parent directory (..)
        if ($file !== '.' && $file !== '..') {
            // Process the file
    
          $moviename=str_replace(".jpg",".mp4","$file");
          echo "<a href='loadmovie.php?mname=content/".$songtype.$moviename."'>";
          echo "<img src='content/poster/".$songtype.$file."' class='model'>";
          echo "</a>";
          echo "<br><br>";

        }
      }       

  ?>
                </div>
            </ul>
        </ul>

    </div>


</div>

<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br><br><br><br><br>
<br><br><br>

<?php 
include 'footer.php';
?>

</body>

</html>