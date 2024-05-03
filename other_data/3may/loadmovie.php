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
                        <?php
       $nametype=$_GET['mname'];
       $nametype=substr($nametype, 8,strlen($nametype));
       $nametype=substr($nametype, 0,strpos($nametype, "/"));
       echo "<a href='".$nametype.".php'><button><b>Back</b></button> </a>";
       ?>

                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="welcomemsg">
                        <marquee><B><I>
                                    <h1>WELCOME TO INDIAN RAILWAYS !!</h1>
                                </I></B></marquee>
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
            <div class="videoplayer">

                <div class="col-lg-9">

                    <h1>
                        Requested content
                    </h1>
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
                <div class="col-lg-3">
                    <h1>Related content</h1>
                    <ul id='video-list'>

                        <ul id="playlistItems">
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
                                //$moviename=str_replace(".jpg",".mp4","$file");
                                $moviename=str_replace([".jpg", ".png"],".mp4","$file");
                                
                                echo "<a href='loadmovie.php?mname=content/".$songtype.$moviename."'>";
                                echo "<img src='content/poster/".$songtype.$file."' class='model'>";
                                echo "</a>";
                                echo "<br><br>";
                              }
                            }       
                            ?>
                        </ul>
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