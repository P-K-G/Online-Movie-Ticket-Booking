<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="style.css">

    <title>Movie Seat Booking</title>
<body >
 <div class="login" id="blur">
	
	
	<img src="https://encrypted-tbn0.gstatic.com/images?q=tbn:ANd9GcTJ5P9ErMTTo_ZsF7ipzotgj7eov0bBso64IQ&usqp=CAU" width="400" height="150">
    <form name="login" action="ticket.html"> 
    <div class="movie-container" >

        <strong ><label >
        </label>
        </strong>
        <select id="movie">
			<option value="240"  ></option>
			
        </select>
    </div>

    <ul class="showcase">
        <li>
            <div class="seat"></div>
            <small>N/A</small>
        </li>
        <li>
            <div class="seat selected"></div>
            <small>Selected</small>
        </li>
        <li>
            <div class="seat occupied"></div>
            <small>Occupied</small>
        </li>
    </ul>
    
        <div class="container">
             <div class="screen"><b style="color:blue; font-size:50px;"><center>Welcome</center></b></div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div><div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat occupied"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div><div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div><div class="row">
                    <div class="seat"></div>
                    <div class="seat occupied"></div>
                    <div class="seat occupied"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat occupied"></div>
                    <div class="seat"></div>
                </div>
                <div class="row">
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat"></div>
                    <div class="seat occupied"></div>
                    <div class="seat"></div>
                </div>
        </div>

       <strong> <p class="text">You Have selected <span id="count"> 0 <\n> </span> Seat for a price of RS <span id="total"> <\n> 0 </span></p></strong>
        <script src="script.js"></script>
        <br>
        <input id="book"type="submit" value="Book your Tickets">
    </form>
	
       
   </img></div>
	<?php 
$server = "localhost";
$usernam = "root";
$pass = "";
$database = "demo";
$conn = mysqli_connect($server, $usernam, $pass, $database);
if(!$conn){
    die("</br>Connection was failed" .mysqli_connect_error());
}
if($_POST){
    $name = $_POST['first_name'];
    $lname = $_POST['last_name'];
    $email = $_POST['email'];
$sqli = "UPDATE `person` SET `First Name` = '$name', `last name` = '$lname', `Email` = '$email' WHERE `person`.`id` = 1;";
$result = mysqli_query($conn, $sqli);
}
?>
</body>
</html>