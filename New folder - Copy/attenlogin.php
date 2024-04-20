<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>
<head>
<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<link rel="icon" href="img/logo.jpg">
<title>PTCS Entertainment</title>
<link rel="stylesheet" href="css/style.css"/>
<link rel="stylesheet" href="css/register_form.css"/>


<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>

<script>
    window.onload = setTimeout(function() {
      var successMessage = "<?php session_start(); echo isset($_SESSION['user_message']) ? $_SESSION['user_message'] : '';$_SESSION['user_message'] = ""; ?>";
      if (successMessage !== "") {
        alert(successMessage);
      }
    },500);
  </script>

<style type="text/css">
	.box{
			background: linear-gradient(to  left, #ff9933 0%, #33ccff 100%);
			            justify-content: all;
			             display: flex;
			             margin-left: 50px;
		}


			
table, th, td {
	width: 30%;
	padding: 10px;
	color: white;
}

@media screen and (max-width: 800px) {
  table{
  	width: 50%;
  	padding: 10px;
  }
}

</style>
<body>
    <div id="marquee1" >
		<marquee width=100%>
			WELCOME TO INDIAN RAILWAYS
		</marquee>
	</div>
	


<?php 
include 'add.php';
?> 

		<!-----------------------------------automatic slider ----------------------------------------------------------------------->
	<br><br><br>
  
    <div id="loginform"  class="Attendent_login_form">
    <h2 style="padding-left:20px;color: white;">Attendent Login</h2>
<form action="attenauth.php" method="post">
   <table><tr><td>

    <label for="user"><b>UserName</b></label></td><td>
    <input type="text" placeholder="Enter UserName" name="user" id="user" required></td></tr><tr><td>
    <label for="psw"><b>Password</b></label></td><td>
    <input type="password" placeholder="Enter Password" name="passw" id="passw" required></td></tr><tr><td>
    <button type="submit" value="submit" class="registerbtn">Login</button>
  
  </td></tr></table>
</form>
</div>

<br><br><br>
<?php 
//include header
include 'footer.php';

?> 
<script type="text/javascript" src="js/script.js" ></script>

</body>
</html>
