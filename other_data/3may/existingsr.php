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
    <link rel="stylesheet" href="css/Attendent_login.css" />
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

                        <a href="index.php"><button><b>Back</b></button> </a>
                    </div>
                </div>
                <div class="col-xs-10">
                    <div class="welcomemsg">
                        <marquee>WELCOME TO INDIAN RAILWAYS !!</marquee>
                    </div>
                </div>



            </div>
        </div>
    </div>
    <?php

include ('_add.php')

?>
    <section id="Attendent_login_body">
        <div class="form-box-existing">
            <div class="form-value">
                <form action="existingsrd.php" method="post">
                    <h2 id="Attendent_login_heading">Existing Service
                        Request</h2>
                    <div class="inputbox">
                        <input type="Number" id="pnrnumber" name="pnrnumber" required>
                        <label class="pnrnumber" for="pnrnumber">PNR Number</label>
                    </div>

                    <!-- <button id="register_form_existing_status">status</button> -->
                    <input type="submit" name="status" value="status" id="register_form_existing_status">

                </form>
            </div>
        </div>
    </section>
    <!---------------------------------------------------------------------------------------------------------->
    <!--<div class="container1" >-->
    <!--slider---------------->

    <?php
  include ('_footer.php');

  ?>

</body>

</html>