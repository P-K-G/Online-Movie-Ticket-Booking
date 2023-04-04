<?php 
$server = "localhost";
$usernam = "root";
$pass = "";
$database = "signup";
$conn = mysqli_connect($server, $username, $pass, $database);
if(!$conn){
    die("</br>Connection was failed" .mysqli_connect_error());
}
if($_POST){
    $Name = $_POST['Name'];
    $contect = $_POST['contact'];
    $Email = $_POST['Email'];
	$Password = $_POST['Password']
$sqli = "INSERT INTO `sign` (`Name`, `contact`, `Email`,'Password') VALUES ('$Name', '$contact', '$Email','$Password');";
$result = mysqli_query($conn, $sqli);

if($result){
    echo "Item Inserted was Created Successfully</br>";

}
else{
    echo "Item Inserted was not Created Successfully</br>" . mysqli_error($conn);

}
}


 ?>