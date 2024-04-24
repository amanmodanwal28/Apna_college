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
            "<?php session_start(); echo isset($_SESSION['success_message']) ? $_SESSION['success_message'] : '';$_SESSION['success_message'] = ""; ?>";
        if (successMessage !== "") {
            alert(successMessage);
        }
    }, 500);
    </script>

     <!-- <div class="rightbutton" style="float: right; width: 18%;">
            <a href="attenlogin.php"><button type=""
                    style="width: 100%;height: 48px;	background: linear-gradient(to  left, #ff9933 0%, #33ccff 100%);"><b>Attendent
                        Login</b></button> </a>
                        </div> -->
                        

</head>
 
<body>
    <div id="marquee1_register_form" >
        <marquee width=100%>
            WELCOME TO INDIAN RAILWAYS
        </marquee>
        
    </div>
    <div id="attendent_login_btn" >
        <a href="attenlogin.php">
            <button>Attendent Login</button>
        </a>
    </div>

<?php 
include 'add.php';
?>

<!-----------------------------------automatic slider ----------------------------------------------------------------------->
<div class="form_register">

    <h1 class="service_heading">New Service Request</h1>
    <table>
        <form action="registersr.php" method="post" style="color: white;">
            <tr>
                <td> <label class="pnrnumber" for="pnrnumber">PNR Number</label></td>
                <td> <input type="text" id="pnrnumber" name="pnrnumber" required></td>
            </tr>
            <tr>
                <td>
                    <label class="passengername" for="passengername">Passenger Name</label>
                </td>
                <td> <input type="text" id="passengername" name="passengername" required></td>
            </tr>
            <tr>
                <td> <label for="contactno">Contact No</label></td>
                <td> <input type="Number" id="contactno" name="contactno" required></td>
            </tr>
            <tr>
                <td><label for="seatno">Seat No</label></td>
                <td><input type="Number" id="seatno" name="seatno" required></td>
            </tr>
            <tr>
                <td><label for="service">Servicees</label></td>
                <td><select id="service" name="service" style="width: 180px;height: 20px;" ;>
                        <option value="emergency">Emergency</option>
                        <option value="security">Security</option>
                        <option value="linen">Linen</option>
                        <option value="veg">Veg Food</option>
                        <option value="nonveg">Non Veg</option>
                        <option value="specialcase">Special Case</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="message">Write your complaint here...</label></td>
                <td><textarea id="message" name="message" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
        </form>
        <td>
            <br>
            <form action="existingsr.php" method="post">
                <input type="submit" name="existingsr" value="  Existing  ">
        </td>
        </form>
        </tr>
    </table>
</div>
<?php 
//include header
include 'footer.php';

?>
</body>

</html> 