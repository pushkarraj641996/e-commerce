<?php
session_start();

include 'Connection.php';

$fn = $_POST['First_name'];

$ln = $_POST['Last_name'];

$eid = $_POST['email'];

$pass = $_POST['password'];

$pass2 = $_POST['c_password'];

if($pass === $pass2)
{
	
$query = "CALL insertdata('".$fn."', '".$ln."', '".$eid."', '".$pass."')";

mysql_query($query,$db) or die("<h2 style = 'color:red;'> This Email id Already Has been Registered........</h2>");

header("location:index.php");

}
else
{
echo "<h2 style = 'color:red;'> Sorry Your Password Not Match, Please Try again.</h2>";	
}


mysql_close($db);

?>
