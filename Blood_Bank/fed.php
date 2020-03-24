<?php
$link=mysqli_connect('localhost','root','');
mysqli_select_db($link,'project');
$sql="SELECT * FROM feedback";
$records=mysqli_query($link,$sql);



?>

<html>
<head>
<title>FEEDBACK SEARCH</title>
  <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
<link rel="stylesheet" type="text/css" href="fed.css">
<style>

.topnav {
  overflow: hidden;
  background-image: repeating-linear-gradient(#0AFAB7, #F9E79F, violet);
}

.topnav a {
  float: left;
  display: block;
  color: #ff0000  ;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.topnav a:hover {
  background-color: #ddd;
  color: black;
  border-bottom: 2px solid red;
}

.topnav a.active {
  background-color: #cc0000;
  
  color: white;
}

.topnav .icon {
  display: none;
}

@media screen and (max-width: 600px) {
  .topnav a:not(:first-child) {display: none;}
  .topnav a.icon {
    float: right;
    display: block;
  }
}

@media screen and (max-width: 600px) {
  .topnav.responsive {position: relative;}
  .topnav.responsive .icon {
    position: absolute;
    right: 0;
    top: 0;
  }
  .topnav.responsive a {
    float: none;
    display: block;
    text-align: left;
  }
}


.navbar {
  overflow: hidden;
  color:black; 
  position: fixed;
  bottom: 0;
  width: 100%;
  background-color: #AEB6BF;
}

.navbar a {
  float: left;
  display: block;
  color: black;
  text-align: center;
  padding: 14px 16px;
  text-decoration: none;
  font-size: 17px;
}

.navbar a:hover {
  background-color: #ddd;
  color: black;
}

.navbar a.active {
  background-color: #4CAF50;
  color: white;
}

body{
    background-image: url("fg.jpg");
}





</style>
</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="home.php" class="active"><b>A PRECIOUS GIFT FOR LIFE</b></a>
  <a href="home.php" style="float: right;"><b>HOME</b></a>
  <a href="blood.html" style="float: right;"><b>BLOOD DETAILS</b></a>
  <a href="about.html" style="float: right;"><b>ABOUT</b></a>
   <a href="feed.php" style="float: right;"><b>FEEDBACK</b></a>
    <a href="admin.php" style="float: right;"><b>ADMIN</b></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>
<a href="adminoption.php" class="previous round">&#8249;</a>

<center><h3 style="width: 50%;background-image: url('cv1.jpg');"> <b> SHOW FEED BACKS </b> </h3></center>
<table id="myTable">
  <tr class="header">
   <th style="width:8%;" ><i>OVERALL</i></th>
  <th style="width:10%;"><i>FAST NAME</i></th>
	<th style="width:15%;"><i>LAST NAME</i></th>
	<th style="width:10%;"><i>PHONE NO.</i></th>
		<th style="max-width:10%;"><i>EMAIL-ID</i></th>
    <th style="width:10%;"><i>STATE</i></th>
    <th style="width:12%;"><i>CITY</i></th>
    <th style="max-width:5%;"><i>WORD</i></th>
   
 </tr>
 <?php
 while($feedback=mysqli_fetch_array($records)){
	echo "<tr>";
echo "<td>".$feedback['overall']."</td>";	
echo "<td>".$feedback['firstname']."</td>";
echo "<td>".$feedback['lastname']."</td>";
echo "<td>".$feedback['phone']."</td>";
echo "<td>".$feedback['email']."</td>";
echo "<td>".$feedback['state']."</td>";
echo "<td>".$feedback['city']."</td>";
echo "<td>".$feedback['word']."</td>";

 }
 ?>
 </table>




 <div class="a">
  <a href="" style="float: center;background-image:url('kl.jpg');color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;"><b>&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</b></a>
  <a href="" style="float: right;background-image:url('kl.jpg'); color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;"><b>&copy;DESIGN BY AVICK,ARITRA,SUBRATA,SOURADEEP</b></a>
</div>
</body>
</html>