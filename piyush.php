<html>
<body>
<?php
if ($submit) {
// Open MYSQL server connection
$db = mysql_connect("localhost", "root","q1w2e3r4/");
// Select the database using MYSQL server connection mysql_select_db("mydb",$db);
/* Write insert query and assign the query in $sql Variable */
$sql = "INSERT INTO employees (first,last,address,position) VALUES('$first','$last','$address','$position')";
// Execute the query
$result = mysql_query($sql);
echo "Thank you! Information entered.";
}
else
{
// display form
?>
<form method="post" action="<?php echo $PHP_SELF?>"> 
First name:<input type="Text" name="first"><br> 
Last name:<input type="Text" name="last"><br> 
Gender:<input type="text" name="gender"><br> 
Address:<input type="Text" name="address"><br> 
Position:<input type="Text" name="position"><br>
<button type="Submit" >submit</button> 
</form>
<?php
} // end if
?>
</body>
</html>
