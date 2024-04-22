
<div class="slideshow-container" >
    <?php
      $folderPath = 'content/add';
      // Read all files in the folder
      $files = scandir($folderPath);

      // Iterate over each file
      foreach ($files as $file) {
        // Exclude current directory (.) and parent directory (..)
        if ($file !== '.' && $file !== '..') {
            // Process the file
            if(substr($file, strlen($file)-4,strlen($file)-1)==".jpg"){
              echo "<div class='mySlides fade'>";
              echo "<img src=content/add/".$file." width='100%' height='150'>";
              echo '</div>';
            }
            else if(substr($file, strlen($file)-4,strlen($file)-1)==".png"){
              echo "<div  class='mySlides fade'>";
              echo "<div id='marquee1' style='overflow:hidden; left:1px; top:15px; width:device-width;  z-index:1 ;margin-top: 0px;'  >";
              echo "<div class='scroll ' style='border: 5px solid black ; margin: 0px;'>";

              echo " <marquee width=100%>";
                echo "<div class='wpmd'>";
                  echo "<div><div class='imageleftadd' style='width :20% ; float: left; margin-right: 0px;margin-top:  0px;margin-bottom: 25px;'><img src='content/add/".$file."' ></div>";
                  echo "<div class='imagerightadd' style='width:80% ;margin-left: 0px; margin-bottom: 0px;'><font color='#ffffff' face='@Meiryo' class='ws28' align:center ><B><I> <h2> ".substr($file, 0 , strlen($file)-4)."</h2></I></B></font></div>";
    echo "</div>";
    echo "</div></marquee>";
    echo "</div>";
    echo "</div>";
    echo '</div>';
            }
    /*  for play video add uncomment this portion of code
            else if{
              echo "<div class='mySlides fade'>";
              echo "<video width='100%' height='150' loop muted autoplay >";
              echo "<source src='content/add/".$file."' type='video/mp4'>";
              echo "</video>";
              echo "</div>";
            }
    */   

        }     
      }
  ?>
</div>
</div>
<script>
var slideIndex = 0;
showSlides();

function showSlides() {
    var i;
    var slides = document.getElementsByClassName("mySlides");
    var dots = document.getElementsByClassName("dot");
    for (i = 0; i < slides.length; i++) {
        slides[i].style.display = "none";
    }
    slideIndex++;
    if (slideIndex > slides.length) {
        slideIndex = 1
    }

    /*for (i = 0; i < dots.length; i++) {
      dots[i].className = dots[i].className.replace(" active", "");
    }*/

    slides[slideIndex - 1].style.display = "block";
    /*dots[slideIndex-1].className += " active";*/
    setTimeout(showSlides, 25000); // Change image every 2 seconds
}
</script>