<?php 
//include header
include 'headerlogin.php';
include 'welcome1.php';
include 'add.php';
?> 

		<!-----------------------------------automatic slider ----------------------------------------------------------------------->
	<br><br><br>
    <h2 style="padding-left:20px;color: white;">Attendent Login</h2>
  <div id="loginform">
<form action="attenauth.php" method="post">
   <table><tr><td>

    <label for="user"><b>UserName</b></label></td><td>
    <input type="text" placeholder="Enter UserName" name="user" id="user" required></td></tr><tr><td>
    <label for="psw"><b>Password</b></label></td><td>
    <input type="password" placeholder="Enter Password" name="passw" id="passw" required></td></tr><tr><td>
    <button type="submit" value="submit" class="registerbtn">Login</button>
  
  </td></tr></table>
</form>

  </div>
<br><br><br>
<?php 
//include header
include 'footer.php';

?> 
<script type="text/javascript" src="js/script.js" ></script>

</body>
</html>
