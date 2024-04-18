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
<link rel="stylesheet" href="css/header.css"/>

<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<style>
* {
  box-sizing: border-box;
}

.lefttour {
  padding: 20px;
  float: left;
  width: 50%; /* The width is 20%, by default */
  height: auto;
}


.righttour {

  float: left;
  width: 50%; /* The width is 20%, by default */
  height: auto;
}
	

/* Use a media query to add a break point at 800px: */
@media screen and (max-width: 800px) {
  .lefttour, .main, .righttour {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}