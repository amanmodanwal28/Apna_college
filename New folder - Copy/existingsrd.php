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

<body>
    <div id="marquee1" >
		<marquee width=100%>
			WELCOME TO INDIAN RAILWAYS
		</marquee>
	</div>
	

<?php 
//include header
session_start();
include 'add.php';
?>
    <h1 class="heading_top_center">Existing Service Request</h1>
<?php

$csvFilePath = 'content\database\registersr.csv';

// Open the CSV file
$file = fopen($csvFilePath, 'r');
$pnr_num=$_POST['pnrnumber'];
$counter=10;
$result=false;
$header=true;
// Read each row of data
 
while (($row = fgetcsv($file)) !== false) {
    // Loop through each cell in the row
    echo '<tr>';
    foreach ($row as $cellValue) {
        // Do something with the cell value
        if($pnr_num==$cellValue ){
        	$counter=0;
        	$result=true;
        }
        if($result==true && $header==true){
		echo '<table class="customer_data_sheet">';
 		echo '<tr class="customer_data_sheet_row">
            <th class="customer_data_sheet_head">PNR NUMBER</th>
            <th>PASSENGER NAME</th>
            <th>CONTACT NO&nbsp;&nbsp;&nbsp;</th>
            <th>SEAT NO</th>
            <th>SERVICE TYPE</th>
            <th>COMPLAINT MESSAGE</th>
            <th>SR DATE</th><th>SR TIME</th>
            <th>SERVICE STATUS</th>
            <th>ACTION TAKEN</th>
        </tr>';

        	$header=false;
        }
        if($counter<10){

        	echo '<td class="customer_data_sheet_data">'.$cellValue.'</td>';
        	
        	$counter++;
        }

    }

   if($result==true && $header== false ){
   	 echo '</tr>';
   }
}
 if($result==true && $header== false ){
 echo '</table>';
}
// Close the file
fclose($file);

if($result==false){
	
	header("Location: existingsr.php"); // Redirect to the new page
	$_SESSION['fail_message'] = "Service Request not registered";
	exit();
}
?>
<br><br>
<?php 
//include header
include 'footer.php';

?> 

</body>
</html>
