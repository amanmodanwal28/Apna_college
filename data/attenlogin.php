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

    <style type="text/css">

        table, th, td {
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

<div id="loginform" class="Attendent_login_form">
    <h2 style="padding-left:20px;color: white;">Attendent Login</h2>
    <table>
        <tr>
            <td><label for="user"><b>UserName</b></label></td>
            <td><input type="text" placeholder="Enter UserName" name="user" id="user" required></td>
        </tr>
        <tr>
            <td><label for="psw"><b>Password</b></label></td>
            <td><input type="password" placeholder="Enter Password" name="passw" id="passw" required></td>
        </tr>
        <tr>
            <td><button id="loginBtn" class="registerbtn">Login</button></td>
        </tr>
    </table>
</div>

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

                if(username === 'attendent' && password === 'railstaff@12') {
                    window.location.href = 'attenstatus.php?selection=both';
                } else {
                    alert('you are not a registered user..');
                }
            });
        });
    </script>
</body>
</html>
