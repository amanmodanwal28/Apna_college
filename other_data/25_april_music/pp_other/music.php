<!DOCTYPE html>
<html>

<head>
    <meta name="viewport" content="width=device-width, initial-scale=1.0">

    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="icon" href="img/logo.jpg">
    <title>PTCS Entertainment</title>
    <link rel="stylesheet" type="text/css" href="css/music.css">
    <link rel="stylesheet" type="text/css" href="css/loadmusic.css">
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/music/mainPage.css" />
    <link rel="stylesheet" href="css/music/side-playlist.css" />
    <link rel="stylesheet" href="css/music/responsive.css" />
    <!--Jquery-->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script type="text/javascript" src="js/test.js"></script>

    <style>
    * {
        box-sizing: border-box;
    }
    </style>
</head>

<body>
    <div id="marquee1">
        <marquee width=100%>
            WELCOME TO INDIAN RAILWAYS
        </marquee>
    </div>



    <?php 
include 'add.php';
?>
    <aside class="playlist">
        <h1>Playlist</h1>
        <h4>
            <select id="folderSelect">
                <option value="hindi">Hindi</option>
                <option value="english">English</option>
                <option value="regional1">Regional1</option>
                <option value="regional2">Regional2</option>
                <!-- Add more options for different folders -->
            </select>
        </h4>
        <!--------- playlist songs --------->
        <div class="song-container">
            <p id="playlistItems">Warriyo-mortals</p>
        </div>

    </aside>
    <!--------------------------- MasterPlay section - Bottom ------------------>
    <section class="masterPlay">
        <div class="leftside">
            <div class="song-details title">
                <div class="title">
                    <marquee id="songtitle">&nbsp;&nbsp;&nbsp;&nbsp;</marquee><br>
                </div>
            </div>

        </div>
        <div class="middle">
            <audio id="audioPlayer" controls controlsList="nodownload">
                Your browser does not support the audio element.
            </audio>
            <!-- <audio src="./assests/linkin-park.mp3" controls></audio> -->
            <img src="./assests/icons/shuffle.png">
            <img src="./assests/icons/repeat.png">
            <img src="./assests/icons/expand-arrows.png" class="expand">
        </div>
    </section>





</body>

</html>