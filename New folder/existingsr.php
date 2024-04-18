<?php 
//include header
include 'headerexsr.php';
include 'welcome1.php';
include 'add.php';
?> 


		<!-----------------------------------automatic slider ----------------------------------------------------------------------->
	 <div style="padding-left:20px; ">

    <h1 style="padding-top: 60px;">Existing Service Request</h1>
    <table>
   <form action="existingsrd.php" method="post" style="color: white;">
     <tr><td>   <label for="pnrnumber">PNR Number</label></td>
      <br> <td> <input type="text" id="pnrnumber" placeholder="enter your PNR Number" name="pnrnumber" required><br><br></td>
        </tr>
       <tr> <td><input type="submit" value=" SR status "></td> </form>
  	  </tr>
  </table>
<br><br>
<?php 
//include header
include 'footer.php';

?> 
</body>
</html>
