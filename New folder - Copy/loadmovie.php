<?php 
//include header
include 'headerloadmovie.php';
include 'welcome2.php';
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