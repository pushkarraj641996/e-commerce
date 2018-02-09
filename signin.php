<?php

session_start();

require 'Connection.php';

if(isset($_POST['email']))
{

$eid = $_POST['email'];

$pass = $_POST['password'];

$query = "SELECT * FROM signup where EmailId = '$eid' and Password = '$pass'";

$result = mysql_query($query) or die("Error in query");

$row = mysql_num_rows($result);

$result2 = mysql_query("SELECT FirstName from signup where EmailId = '$eid'");

$r = mysql_fetch_row($result2);

if($row == 1)
{

$_SESSION['Email'] = $eid;

$_SESSION['name'] = $r[0];


header("location:index.php");

}
else
{
echo "Invalid Id or Password";
header("location:index.php");
}

}

mysql_close($db);
?>