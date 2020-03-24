<html>
<body>


<?php
$con=mysqli_connect('127.0.0.1','root','');
if(!$con)
{
	echo 'not connected to server';
}
if(!mysqli_select_db($con,'project'))
{
	echo 'database not select';
}
$Name=$_POST['name'];
$PhoneNumber=$_POST['phonenumber'];
$Address=$_POST['address'];
$Blood=$_POST['bloodgr'];
$Pincode=$_POST['pincode'];



$sql="INSERT INTO visit1 (NAME,PHONE,ADDRESS,PINCODE,BLOOD) VALUES ('$Name', '$PhoneNumber', '$Address','Pincode', '$Blood')";


if(!mysqli_query($con,$sql))
{
	echo 'not';
}

header("refresh:2; url=search.html");





?>
