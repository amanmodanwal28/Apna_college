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

    <style type="text/css">
    table,
    th,
    td {
        width: 30%;
        padding: 10px;
        color: white;
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

    <section id="Attendent_login_body">
        <div class="form-box">
            <div class="form-value">
                <h2 id="Attendent_login_heading">Attendent Login</h2>
                <div class="inputbox">
                    <input type="text" name="user" id="user" required>
                    <label for="user">UserName</label>
                </div>
                <div class="inputbox">
                    <input type="password" name="passw" id="passw" required>
                    <label for="psw">Password</label>
                </div>
                <button id="loginBtn" class="Attendent_login_btn">Login</button>
            </div>
        </div>
    </section>
    <br><br><br>

    <?php
//include footer
include 'footer.php';
?>

    <script type="text/javascript" src="js/script.js"></script>
    <script>
    $(document).ready(function() {
        $('#loginBtn').click(function(e) {
            e.preventDefault();

            var username = $('#user').val();
            var password = $('#passw').val();

            if (username === 'attendent' && password === 'railstaff@12') {
                window.location.href = 'attenstatus.php?selection=both';
            } else {
                alert('you are not a registered user..');
            }
        });
    });
    </script>
</body>

</html>