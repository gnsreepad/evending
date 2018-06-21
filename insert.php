<?php

$con = mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo "Not Connected";
}
if(!mysqli_select_db($con,'evending'))
{
	echo "Not Selected";
}

$code=$_POST['code'];
$name=$_POST['name'];
$price=$_POST['price'];
$count=$_POST['count'];
$checksum=$_POST['checksum'];

$sql="INSERT INTO product(code,name,price,count,checksum) VALUES ('$code','$name','$price','$count','$checksum')";

if( !mysqli_query($con,$sql) )
{
	echo 'no value inserted';
}

else
{
	echo 'inserted values';
}



//header(" refresh:1 ; url='cart.php' ");

?>