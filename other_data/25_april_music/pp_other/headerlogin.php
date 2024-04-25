<!DOCTYPE HTML PUBLIC "-//W3C//DTD HTML 4.01 Transitional//EN">
<html>

<head>
    <meta charset="utf-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
    <link rel="icon" href="img/logo.jpg">
    <title>PTCS Entertainment</title>
    <link rel="stylesheet" href="css/styel.css" />
    <link rel="stylesheet" type="text/css" href="css/lightslider.css" />
    <link rel="stylesheet" href="css/silderstyel.css" />
    <!--Jquery-->
    <script type="text/javascript" src="js/JQuery3.3.1.js"></script>
    <script type="text/javascript" src="js/lightslider.js"></script>

    <script>
    window.onload = setTimeout(function() {
        var successMessage =
            "<?php session_start(); echo isset($_SESSION['user_message']) ? $_SESSION['user_message'] : '';$_SESSION['user_message'] = ""; ?>";
        if (successMessage !== "") {
            alert(successMessage);
        }
    }, 500);
    </script>

    <style type="text/css">
    .box {
        background: linear-gradient(to left, #ff9933 0%, #33ccff 100%);
        justify-content: all;
        display: flex;
        margin-left: 50px;
    }



    table,
    th,
    td {
        width: 30%;
        padding: 10px;
        color: white;
    }

    @media screen and (max-width: 800px) {
        table {
            width: 50%;
            padding: 10px;
        }
    }