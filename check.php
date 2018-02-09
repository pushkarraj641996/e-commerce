<html>
<head>
<title>Untitled Document</title>
<link rel = "stylesheet" type = "text/css" href = "mystyle.css">
</head>
<body>
<?php
  
session_start();

include 'Connection.php';


$odt = date("Y-m-d H:i:s");


if(isset($_SESSION['Email']))
{{

if(!isset($_SESSION['cart']))
{
$_SESSION['cart'] = array();

}

$em = $_SESSION['Email'];

}

if(isset($_POST['submit']))
{

$fn = $_POST['sfname'];

$ln = $_POST['slname'];

$e =  $_POST['semail'];

$add = $_POST['Address'];

$cont = $_POST['select'];

$s = $_POST['state'];

$city = $_POST['city'];

$z = $_POST['zcode'];

$cn = $_POST['contact'];

$sm = $_POST['shipcharge'];

$pm = $_POST['payment'];


if($sm == 'Standard Shiping')
{
	
	$charge = 8.50;
}
else
{
	$charge = 0;
	
}
$tp2 = 0;


	
$r = mysql_query("INSERT INTO orders(FirstName, LastName, Email, ShippingAddress, Country, State, City, Zip_code, contactNo, ShippingMethod, PaymentMethod, Email_id, Order_Amount, temp) VALUES('".$fn."', '".$ln."', '".$e."', '".$add."', '".$cont."', '".$s."', '".$city."', '".$z."', '".$cn."', '".$sm."', '".$pm."', '".$em."', '".$tp2."', '".$odt."')") or die("Failed to Insert Data");


$tp2=0;

foreach ($_SESSION["cart"] as $item)
{
		$tp = $item['quant'] * $item['price'];
		$tp2 += $tp;
		$gst = 0.05*$tp2;

		$tp2 = $tp2 + $gst + $charge;
		
	mysql_query("INSERT INTO cart(Book_id, Bookname, Image, price, quantity, Total_price, email, temp) VALUES('".$item['bid']."', '".$item['title']."', '".$item['image']."', '".$item['price']."', '".$item['quant']."', '".$tp2."', '".$em."', '".$odt."')") or die("Failed ");
	
	 
	
}


$r2 = mysql_query("SELECT order_id from orders");



	while($row = mysql_fetch_row($r2))
	{
		$oid = $row[0];		
	}
	
mysql_query("update cart set Order_id = '$oid' where temp = '$odt'");

mysql_query("update cart set temp = '' where Order_id = '$oid'");

mysql_query("update orders set temp = '' where Order_id = '$oid'");

if($r2)
{
	echo "<hr>";
	
	echo "<h1 align = center class = 'f'> Thank you for Shopping </h1> <br><br> <h4 align = center class = 'f'> Your Order id is : ".$oid."</h4>";
	
	unset($_SESSION["cart"]);
	header( "refresh:5;url=index.php" );
}

else
{
	echo "<h2>Somthig is Wrong... with this Order.... Try again...</h2>";
	
}

mysql_close($db);

}
}
else
{ echo "<h1 align = center class = 'f'> Thank you for Shopping </h1>";

				echo header( "refresh:5;url=index.php" );}

?>

</body> 
</html>