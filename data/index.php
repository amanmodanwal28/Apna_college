<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="icon" href="img/logo.jpg">
    <title>PTCS Entertainment</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/index_box_container.css" />
    

    <!--Jquery-->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script type="text/javascript" src="js/jour.js"></script>
    
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
<!---------------------------------------------------------------------------------------------------------->
<!--<div class="container1" >-->
<!--slider---------------->
<ul id="autoWidth" class="cs-hidden">
    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel">MOVIES</p>
            <!--model-->
            <a href="movies.php">
                <img src="img/home/movies.jpg" class="model">
            </a>
        </div>
    </li>

    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel">VIDEOS</p>
            <!--model-->
            <a href="videos.php">
                <img src="img/home/videos.jpg" class="model">
            </a>
        </div>
    </li>

    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel">MUSIC</p>
            <!--model-->
            <a href="music.php">
                <img src="img/home/music.jpg" class="model">
            </a>
        </div>
    </li>

    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel">KIDS ZONE</p>
            <!--model-->
            <a href="kidszone.php">
                <img src="img/home/kids_zone.jpg" class="model">
            </a>
        </div>
    </li>
    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel">JOURNEY INFO</p>
            <!--model-->
            <a href="journeyinfo.php">
                <img src="img/home/journey.jpg" class="model">
            </a>
        </div>
    </li>
    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel" style=" font-size: 22px;padding-top: 10px;">SERVICE REQUEST</p>
            <!--model-->
            <a href="registersr1.php">
                <img src="img/home/service.jpg" class="model">
            </a>
        </div>
    </li>
    <!--1------------------------------------->
    <li class="item-a">
        <!--slider-box-->
        <div class="box">
            <p class="marvel">TOURIST</p>
            <!--model-->
            <a href="tourist.php">
                <img src="img/home/tourist.jpg" class="model">
            </a>
        </div>
    </li>

</ul>
<?php
	include 'footer.php';

	?>
<script type="text/javascript" src="js/script.js"></script>

</body>

</html>