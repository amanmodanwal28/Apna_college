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
    <link rel="stylesheet" href="css/Attendent_login.css" />

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
    <div id="marquee1_register_form">
        <marquee width=100%>
            WELCOME TO INDIAN RAILWAYS
        </marquee>

    </div>
    <div id="attendent_login_btn">
        <a href="attenlogin.php">
            <button>Attendent Login</button>
        </a>
    </div>

    <?php 
include 'add.php';
?>

    <!-----------------------------------automatic slider ----------------------------------------------------------------------->
    <section id="Attendent_login_body">
        <div class="form-box-register">
            <div class="form-value">
                <form action="registersr.php" method="post">
                    <h2 id="Attendent_login_heading">New Service
                        Request</h2>

                    <div class="inputbox">
                        <input type="text" id="pnrnumber" name="pnrnumber" required>
                        <label class="pnrnumber" for="pnrnumber">PNR
                            Number</label>
                    </div>

                    <div class="inputbox">
                        <input type="text" id="passengername" name="passengername" required>
                        <label class="passengername" for="passengername">Passenger Name</label>
                    </div>

                    <div class="inputbox">
                        <input type="Number" id="contactno" name="contactno" required>
                        <label for="contactno">Contact No</label>
                    </div>
                    <div class="inputbox">
                        <input type="Number" id="seatno" name="seatno" required>
                        <label for="seatno">Seat No</label>
                    </div>
                    <div class="inputbox">
                        <select id="service" name="service" style="width: 180px;height: 20px;" ;>
                            <option value="emergency">Emergency</option>
                            <option value="security">Security</option>
                            <option value="linen">Linen</option>
                            <option value="veg">Veg Food</option>
                            <option value="nonveg">Non Veg</option>
                            <option value="specialcase">Special Case</option>
                        </select>
                        <label for="service">Servicees</label>
                    </div>
                    <div class="inputbox">
                        <textarea id="message" name="message" rows="4" cols="30"
                            placeholder="Enter your Complaint"></textarea>
                        <label for="message">Write your complaint
                            here...</label>
                    </div>

                    <button id="register_login_btn">Login</button>
                </form>
                <form action="existingsr.php" method="post">
                    <input type="submit" name="existingsr" value="  Existing  " id="register_form_existing">

                </form>

            </div>
        </div>
    </section>
    <?php 
//include header
include 'footer.php';

?>
</body>

</html>