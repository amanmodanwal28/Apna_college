<?php 
//include header
include 'headerregsr.php';
include 'welcome1.php';
include 'add.php';
?>

<!-----------------------------------automatic slider ----------------------------------------------------------------------->
<div class="form_register">

    <h1 class="service_heading">New Service Request</h1>
    <table>
        <form action="registersr.php" method="post" style="color: white;">
            <tr>
                <td> <label class="pnrnumber" for="pnrnumber">PNR Number</label></td>
                <td> <input type="text" id="pnrnumber" name="pnrnumber" required></td>
            </tr>
            <tr>
                <td>
                    <label class="passengername" for="passengername">Passenger Name</label>
                </td>
                <td> <input type="text" id="passengername" name="passengername" required></td>
            </tr>
            <tr>
                <td> <label for="contactno">Contact No</label></td>
                <td> <input type="Number" id="contactno" name="contactno" required></td>
            </tr>
            <tr>
                <td><label for="seatno">Seat No</label></td>
                <td><input type="Number" id="seatno" name="seatno" required></td>
            </tr>
            <tr>
                <td><label for="service">Servicees</label></td>
                <td><select id="service" name="service" style="width: 180px;height: 20px;" ;>
                        <option value="emergency">Emergency</option>
                        <option value="security">Security</option>
                        <option value="linen">Linen</option>
                        <option value="veg">Veg Food</option>
                        <option value="nonveg">Non Veg</option>
                        <option value="specialcase">Special Case</option>
                    </select>
                </td>
            </tr>
            <tr>
                <td><label for="message">Write your complaint here...</label></td>
                <td><textarea id="message" name="message" rows="4" cols="30"></textarea></td>
            </tr>
            <tr>
                <td>
                    <input type="submit" value="Register">
                </td>
        </form>
        <td>
            <br>
            <form action="existingsr.php" method="post">
                <input type="submit" name="existingsr" value="  Existing  ">
        </td>
        </form>
        </tr>
    </table>
</div>
<?php 
//include header
include 'footer.php';

?>
</body>

</html>