<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="icon" href="img/logo.jpg">
    <title>PTCS Entertainment</title>
    <link rel="stylesheet" href="css/style.css" />
    <link rel="stylesheet" href="css/Attendent_login.css" />
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
    <div id="marquee1">
        <marquee width=100%>
            WELCOME TO INDIAN RAILWAYS
        </marquee>
    </div>


    <?php 
include 'add.php';
?>


    <!-----------------------------------automatic slider ----------------------------------------------------------------------->

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

                    <button id="register_form_existing_status">status</button>

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