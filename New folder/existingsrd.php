<?php 
//include header
session_start();
include 'headerexsrd.php';
include 'welcome1.php';
include 'add.php';
?> 
	<div style="padding-left:20px; ">

    <h1>Existing Service Request</h1>
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
		echo '<table>';
 		echo '<tr><th>PNR NUMBER</th><th>PASSENGER NAME</th><th>CONTACT NO&nbsp;&nbsp;&nbsp;</th><th>SEAT NO</th><th>SERVICE TYPE</th><th>COMPLAINT MESSAGE</th><th>SR DATE</th><th>SR TIME</th><th>SERVICE STATUS</th><th>ACTION TAKEN</th></tr>';

        	$header=false;
        }
        if($counter<10){

        	echo '<td>'.$cellValue.'</td>';
        	
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
