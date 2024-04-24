<!DOCTYPE html>
<html>
<head>
<meta name="viewport" content="width=device-width, initial-scale=1.0">

<meta charset="utf-8">
<meta http-equiv="X-UA-Compatible" content="IE=edge">
<meta name="viewport" content="width=device-width, initial-scale=1.0 user-scalable=no">
<link rel="icon" href="img/logo.jpg">
<title>PTCS Entertainment</title>
<link rel="stylesheet" href="css/styel.css"/>
<link rel="stylesheet" type="text/css" href="css/lightslider.css"/>
<link rel="stylesheet" href="css/silderstyel.css"/>
<link rel="stylesheet" href="css/header.css"/>

<!--Jquery-->
<script type="text/javascript" src="js/JQuery3.3.1.js"></script>
<script type="text/javascript" src="js/lightslider.js"></script>
<style>
* {
  box-sizing: border-box;
}

.lefttour {
  padding: 20px;
  float: left;
  width: 50%; /* The width is 20%, by default */
  height: auto;
}


.righttour {

  float: left;
  width: 50%; /* The width is 20%, by default */
  height: auto;
}
	

/* Use a media query to add a break point at 800px: */
@media screen and (max-width: 800px) {
  .lefttour, .main, .righttour {
    width: 100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}
</style>
	</head>
	<body style="background: linear-gradient(to right, #ff9933 0%, #33ccff 100%);">
		<!------------------------------------Marquee--------------------------------------------------------------->
		<div id="marquee1" style="overflow:hidden; left:1px; top:15px; width:device-width;  z-index:1 ;margin-top: 30px;"  >

			<div class="right" style="float: left; width: 18%;">
				<a href="logout.php"><button type=""  style="width: 100%;height: 48px;	background: linear-gradient(to  left, #ff9933 0%, #33ccff 100%);"><b>Back</b></button> </a>

			</div>


			<div class="scroll " style="float: left;width: 64%">

				<marquee width=100%>
					<div class="wpmd">
						<div><font color="#4A274F" face="@Meiryo" class="ws28" align:center><B><I> WELCOME TO INDIAN RAILWAYS !!</I></B></font></div>
					</div></marquee>
				</div><div class="right" style="float: right; width: 18%;">
					<a href="logout.php"><button type=""  style="width: 100%;height: 48px;	background: linear-gradient(to  left, #ff9933 0%, #33ccff 100%);"><b>Logout</b></button> </a>

				</div>
			</div> 

<?php 
include 'add.php';
?>  
	
	<!-----------------------------------automatic slider ----------------------------------------------------------------------->
	<div style="padding-top: 50px;padding-left:20px;color: white;">
		<h2 style="float: right; padding-right: 50px;">Welcome Staff</h2> 
		<h2>Service Request status</h2>

	</div ><!---------------------------------------------------------->


	<?php
	
	$csvFilePath = './content/database/registersr.csv';

// Open the CSV file
	$file = fopen($csvFilePath, 'r');

// Read each row of data
	$matrix=array();
	while (($row = fgetcsv($file)) !== false) {
    // Loop through each cell in the row
		$row1 = array();

		foreach ($row as $cellValue) {
        // Do something with the cell value
			$row1[] = $cellValue;
		}

		$matrix[] = $row1;

	}
// Close the file
	fclose($file);		
	$counter=0;
	$selectiontype =$_GET["selection"];

	echo "<div class='sorting ' style='text-align: center;color:white;'>";
	echo "SERVICE REQUEST SORT BY ";
	echo "<form method='post' name='form1'>";
	if($selectiontype=='open'){
		echo '<td>';
		echo "<select   id='select1'   style='background-color:inherit';  onchange=\"sortstatus('" . $selectiontype . "');\">";
		echo "<option value='open' selected>OPEN</option>";
		echo "<option value='close'>CLOSE</option>";
		echo "<option value='both'>BOTH</option>";
		echo "</select>";
		echo '</td>';
	}else if($selectiontype=='close'){
		echo '<td>';
		echo "<select  id='select1' style='background-color:inherit';  onchange=\"sortstatus('" . $selectiontype . "');\">";
		echo "<option value='open'>OPEN</option>";
		echo "<option value='close' selected>CLOSE</option>";
		echo "<option value='both'>BOTH</option>";
		echo "</select>";
		echo '</td>';
	}else if($selectiontype=='both'){
		echo '<td>';
		echo "<select  id='select1' style='background-color:inherit; ';  onchange=\"sortstatus('" . $selectiontype . "');\">";
		echo "<option value='open'>OPEN</option>";
		echo "<option value='close' >CLOSE</option>";
		echo "<option value='both' selected >BOTH</option>";
		echo "</select>";
		echo '</td>';
	}
	echo "</form>";
	echo "</div>";
	echo "<form method='post' name='form'>";
	echo "<div style='overflow-x:auto;'>";
	echo '<table>';
	echo '<tr><th>PNR NUMBER</th><th>PASSENGER NAME</th><th>CONTACT NO</th><th>SEAT NO</th><th>SERVICE TYPE</th><th>COMPLAINT MESSAGE</th><th>SR DATE</th><th>SR TIME</th><th>ACTION TAKEN</th><th>SERVICE STATUS</th></tr>';
	for ($i=(count($matrix)-1); $i >=0 ; $i--) { 
		if($matrix[$i][8]=='open' && $selectiontype=='open'){

			echo '<tr>';	
			echo '<td>' . $matrix[$i][0] . '</td>';
			echo '<td>' . $matrix[$i][1] . '</td>';
			echo '<td>' . $matrix[$i][2] . '</td>';
			echo '<td>' . $matrix[$i][3] . '</td>';
			echo '<td>' . $matrix[$i][4] . '</td>';
			echo '<td>' . $matrix[$i][5] . '</td>';
			echo '<td>' . $matrix[$i][6] . '</td>';
			echo '<td>' . $matrix[$i][7] . '</td>';
			echo "<td><input type='text' id='".$i."' name='actiontaken' placeholder='NO ACTION TAKEN' style='background-color:inherit;' required/></td>";
			echo '<td>';
			echo "<select   name='".$i."'   style='background-color:inherit';  onchange=\"changestatus('" . $matrix[$i][0] . "','" . $matrix[$i][4] . "','" . $i. "');\">";
			echo "<option value='open' selected>OPEN</option>";
			echo "<option value='close'>CLOSE</option>";
			echo "</select>";
			echo '</td>';
			echo '</tr>';
			$counter++;

		}else if ($matrix[$i][8]=='close' && $selectiontype=='close') {

			echo '<tr>';
			echo '<td>' . $matrix[$i][0] . '</td>';
			echo '<td>' . $matrix[$i][1] . '</td>';
			echo '<td>' . $matrix[$i][2] . '</td>';
			echo '<td>' . $matrix[$i][3] . '</td>';
			echo '<td>' . $matrix[$i][4] . '</td>';
			echo '<td>' . $matrix[$i][5] . '</td>';
			echo '<td>' . $matrix[$i][6] . '</td>';
			echo '<td>' . $matrix[$i][7] . '</td>';


			echo '<td>' . $matrix[$i][9] . '</td>';



			echo '<td>';
			echo "CLOSE";

			echo '</td>';
		echo '</tr>';	
			$counter++;
		}else if($selectiontype=='both'){

			echo '<tr>';
			echo '<td>' . $matrix[$i][0] . '</td>';
			echo '<td>' . $matrix[$i][1] . '</td>';
			echo '<td>' . $matrix[$i][2] . '</td>';
			echo '<td>' . $matrix[$i][3] . '</td>';
			echo '<td>' . $matrix[$i][4] . '</td>';
			echo '<td>' . $matrix[$i][5] . '</td>';
			echo '<td>' . $matrix[$i][6] . '</td>';
			echo '<td>' . $matrix[$i][7] . '</td>';

			if( ($matrix[$i][8]=='open') ){
				echo "<td><input type='text' id='". $i ."' name='actiontaken' placeholder='NO ACTION TAKEN' style='background-color:inherit;' required/></td>";
			}else{
				echo '<td>' . $matrix[$i][9] . '</td>';
			}

			if($matrix[$i][8]=='open'){

				echo '<td>';
				echo "<select   name='".$i."'   style='background-color:inherit';  onchange=\"changestatus('" . $matrix[$i][0] . "','" . $matrix[$i][4] . "','" . $i . "');\">";
				echo "<option value='open' selected>OPEN</option>";
				echo "<option value='close'>CLOSE</option>";
				echo "</select>";
				echo '</td>';
			}else{
				echo '<td>';
				echo "CLOSE";
				echo '</td>';

			}


			echo '</tr>';
			$counter++;
		}
	}



	echo '</table>';
	echo "</div>";
	echo '</form>';
	if($counter==0){
		echo "<h2>";
		echo " <center> No service request is available </center>";
		echo "</h2>";
	}


	?>
</div>
<br><br><br>
<img src="img/logo.jpg" alt="Snow" style="width:5%">
<p style="bottom: 0; width:100%;color:white">PT Communication Systems PVT. Ltd. - All Rights Reserved.</p></div>

<script type="text/javascript" src="js/script.js" ></script>
<script>
	
	function changestatus(id,dtype,actiontaken){
		 var actiontak = document.getElementById(actiontaken).value;
		if(actiontak!=''){
			var f=document.form;
		f.method='post';
		f.action='updatesr.php?id='+id +'&dtype='+dtype+'&actiontaken='+actiontak;
		f.submit();
		}else{
			alert("please fill the action taken field");
		}
	}
</script>
<script>
	function sortstatus(sort){
		var f=document.form1;
		f.method='post';
		selectElement = document.querySelector('#select1');
		output = selectElement.value;
		f.action='attenstatus.php?selection='+output;
		f.submit();
	}
</script>
</body>
</html>
