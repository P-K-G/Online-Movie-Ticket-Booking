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
$sqli = "INSERT INTO `person` (`First Name`, `last name`, `Email`) VALUES ('$name', '$lname', '$email');";
$result = mysqli_query($conn, $sqli);
$sqli = "SELECT * FROM `person`";
$result1 = mysqli_query($conn, $sqli);
$nm = mysqli_fetch_assoc($result1);
if($nm>0){
$list = mysqli_fetch_assoc($result1);
echo $list['First Name'];
echo $list['last name'];
echo $list['Email'];
}
if($result){
    echo "Item Inserted was Created Successfully</br>";

}
else{
    echo "Item Inserted was not Created Successfully</br>" . mysqli_error($conn);

}
}


 ?>