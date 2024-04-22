<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="icon" href="img/logo.jpg">
    <title>PTCS Entertainment</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/register_form.css" />
    <!--Jquery-->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>
    <script>
    window.onload = setTimeout(function() {
        var successMessage =
            "<?php session_start(); echo isset($_SESSION['fail_message']) ? $_SESSION['fail_message'] : '';$_SESSION['fail_message'] = ""; ?>";
        if (successMessage !== "") {
            alert(successMessage);
        }
    }, 500);
    </script>


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

    <h1 class="heading_top_center">Existing Service Request</h1>
    <table class = "check_pnr_complain" >
   <form action="existingsrd.php" method="post" style="color: white;">
     <tr><td>   <label class="pnrnumber" for="pnrnumber">PNR Number</label></td>
      <br> <td> <input type="text" id="pnrnumber" placeholder="enter your PNR Number" name="pnrnumber" required><br><br></td>
        </tr>
       <tr> <td><input type="submit" value=" SR status "></td> </form>
  	  </tr>
  </table>
<br><br>
<?php 
//include header
include 'footer.php';

?> 
</body>
</html>
