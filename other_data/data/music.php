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
<link rel="stylesheet" href="css/style.css"/>
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
    <div id="marquee1" >
		<marquee width=100%>
			WELCOME TO INDIAN RAILWAYS
		</marquee>
	</div>
	


<?php 
include 'add.php';
?>

<div class="left">
    <h1 style="font-family: Arial Helvetica;text-align:center; font-weight: bold;font-style: italic;font-size: 33px;">
        MUSIC</h1>
    <div class="audio-player">
        <div class="title">
            <marquee id="songtitle">&nbsp;&nbsp;&nbsp;&nbsp;</marquee><br>
        </div>
        <audio id="audioPlayer" controls controlsList="nodownload">
            Your browser does not support the audio element.
        </audio>

    </div>

</div>


<div class="right">
    <table>

        <tr>
            <td>
                <b>Choose Category:</b>
            </td>
            <td>
                <div class="playlist">
                    <select id="folderSelect" style="background-color: inherit;">
                        <option value="hindi">Hindi</option>
                        <option value="english">English</option>
                        <option value="regional1">Regional1</option>
                        <option value="regional2">Regional2</option>
                        <!-- Add more options for different folders -->
                    </select>
                </div>
            </td>
        </tr>

    </table>

    <ul id='song-list'>

        <ul id="playlistItems">
            <!-- Playlist items will be added here -->
        </ul>

    </ul>
</div>

<?php 
//include header
include 'footer.php';

?>


</body>

</html>