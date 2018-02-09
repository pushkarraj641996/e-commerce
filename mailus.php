<?php
session_start();

include 'Connection.php';

$name = $_POST['name'];

$em = $_POST['email'];

$sub = $_POST['subject'];

$msg = $_POST['message'];



	
$query = "INSERT INTO mail(Name, Email, Subject, Message) VALUES('".$name."', '".$em."', '".$sub."', '".$msg."')";

mysql_query($query,$db) or die("<h2 style = 'color:red;'> This Email id Already Has been Registered........</h2>");

header("location:index.php");


mysql_close($db);

?>