<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
 ?>
<html>
<head>
	<title> DONOR TABLE EDIT </title>
	<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<style>

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("pp.jpg");
}

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







* {box-sizing: border-box;}
body {font-family: Verdana, sans-serif;
}
.mySlides {display: none;}
img {vertical-align: middle;
height: 250px;
}

/* Slideshow container */
.slideshow-container {
  max-width: 100%;
  position: relative;
  margin: auto;
}

/* Caption text */
.text {
  color: #f2f2f2;
  font-size: 15px;
  padding: 8px 12px;
  position: absolute;
  bottom: 8px;
  width: 100%;
  text-align: center;
}

/* Number text (1/3 etc) */
.numbertext {
  color: #f2f2f2;
  font-size: 12px;
  padding: 8px 12px;
  position: absolute;
  top: 0;
}

/* The dots/bullets/indicators */
.dot {

  background-color: white;
  border-radius: 50%;
  display: inline-block;
  transition: background-color 0.6s ease;
}

.active {
  background-color: white;
}

/* Fading animation */
.fade {
  -webkit-animation-name: fade;
  -webkit-animation-duration: 1.5s;
  animation-name: fade;
  animation-duration: 1.5s;
}

@-webkit-keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

@keyframes fade {
  from {opacity: .4} 
  to {opacity: 1}
}

/* On smaller screens, decrease text size */
@media only screen and (max-width: 300px) {
  .text {font-size: 11px}
}



.myVideo {
    position: absolute;
    width:50%;
    height: 50%;

   margin-top: -19px;
  margin-bottom: 100px;
  margin-right: 0px;
  margin-left: auto;

}
.reg{
 overflow:auto;
  font-size: 20px;
   width:52%;
  font-family: cursive;
  margin-top: -19px;
  float:right;
 text-align: center;
 text-shadow: 3px 2px red;
  color: black;
  text-align: center;
  -webkit-animation: glow 1s ease-in-out infinite alternate;
  -moz-animation: glow 1s ease-in-out infinite alternate;
  animation: glow 1s ease-in-out infinite alternate;
}
@-webkit-keyframes glow {
  from {
    text-shadow: 0 0 10px #fff, 0 0 20px #fff, 0 0 30px #e60073, 0 0 40px #e60073, 0 0 50px #e60073, 0 0 60px #e60073, 0 0 70px #e60073;
  text-shadow: 3px 2px red;}
  
  to {
    text-shadow: 0 0 20px #fff, 0 0 30px #ff4da6, 0 0 40px #ff4da6, 0 0 50px #ff4da6, 0 0 60px #ff4da6, 0 0 70px #ff4da6, 0 0 80px #ff4da6;
  }
}
.vi{
  float:right;
  margin-right: 0;
}
@media screen and (max-width:800px) {
   .myvideo, .reg, .ip {
    width:100%; /* The width is 100%, when the viewport is 800px or smaller */
  }
}



@media only screen and (max-width:620px) {
  /* For mobile phones: */
  .myvideo, .reg, .ip {
    width:100%;
  }
}



input{
 border-bottom: 6px  double #E74C3C  ;
  background-color: #85C1E9  ;
  border-radius: 12px;
}



button {
  padding: 8px 15px;
  font-size: 15px;
  text-align: center;
  cursor: pointer;
  outline: none;
  color: #fff;
  background-color: #4CAF50;
  border: none;
  border-radius: 15px;
  box-shadow: 0 9px #999;
}

button:hover {background-color: #3e8e41}

button:active {
  background-color: #3e8e41;
  box-shadow: 0 5px #666;
  transform: translateY(4px);
}

body {
    font-family: Arial, Helvetica, sans-serif;
   
}

* {
   
}

/* Add padding to containers */
.container {
    padding: 16px;
    text-align:center;
  background-color: #D7BDE2  ;
}

/* Full-width input fields */
input[type=text], input[type=password] {
    width: 25%;
    padding: 15px;
    margin: 5px 0 22px 0;
    display: inline-block;
    border: 1px solid;
  border-radius: 5px;
    
}

input[type=text]:focus, input[type=password]:focus {
    background-color: #A9F5D0;
    outline: none;
}
/* Overwrite default styles of hr */
hr {
   
   
}

/* Set a style for the submit button */
.registerbtn {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 100%;
    opacity: 0.9;
}

.registerbtn:hover {
    opacity: 1;
  
}

/* Add a blue text color to links */
a {
    color: dodgerblue;
}

/* Set a grey background color and center the text of the "sign in" section */
.signin {
    background-color: #f1f1f1;
    text-align: center;
  
}

/* Set a style for all buttons */
button {
    background-color: #4CAF50;
    color: white;
    padding: 14px 20px;
    margin: 8px 0;
    border: none;
    cursor: pointer;
    width: 20%;
    opacity: 0.9;
}

button:hover {
    opacity:2;
}

/* Extra styles for the cancel button */
.cancelbtn {
    padding: 14px 20px;
    background-color: #f44336;
}

/* Float cancel and signup buttons and add an equal width */
.cancelbtn, .signupbtn {
  float: left;
  width: 50%;
}

/* Add padding to container elements */
.container {
    padding: 16px;
  text-align:center;
}

/* The Modal (background) */
.modal {
    display: none; /* Hidden by default */
    position: fixed; /* Stay in place */
    z-index: 1; /* Sit on top */
    left: 0;
    top: 0;
    width: 100%; /* Full width */
    height: 100%; /* Full height */
    overflow: auto; /* Enable scroll if needed */
   background-image: url("b.jpg");
    padding-top: 50px;
  background-position: center;
    background-repeat: no-repeat;
    background-size: cover;
}

/* Modal Content/Box */
.modal-content {
    background-color: #fefefe;
    margin: 5% auto 15% auto; /* 5% from the top, 15% from the bottom and centered */
   height:50%;
    width: 80%; /* Could be more or less, depending on screen size */
}

/* Style the horizontal ruler */
hr {
    border: 1px solid #f1f1f1;
    margin-bottom: 25px;
}
 
/* The Close Button (x) */
.close {
    position: absolute;
    right: 35px;
    top: 15px;
    font-size: 40px;
    font-weight: bold;
    color: red;
}

.close:hover,
.close:focus {
    color: #f44336;
    cursor: pointer;
}

/* Clear floats */
.clearfix::after {
    content: "";
    clear: both;
    display: table;
}

/* Change styles for cancel button and signup button on extra small screens */
@media screen and (max-width: 300px) {
    .cancelbtn, .signupbtn {
       width: 100%;
    }

.visit{
   bottom: 0;
    position: fixed;
 text-align: center;
}
  .av {
  text-decoration: none;
  display: inline-block;
  padding: 8px 16px;
  float: left;

}
  .av:hover {
  background-color: #ddd;
  color: black;
}

</style>
	<link rel="stylesheet" type="text/css" href="donorinsert.css">
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
<a href="adminoption.php" class="previous round" >&#8249;</a>
<center>
<h2 style="background-color: #CCFF00;"><b> <i>DONOR TABLE MANIPUTATE <i></b></h2>
<form name="form1" action="" method="post">
		<div class="input-group">
				<td ><b>Donor ID</b></td>
				<td>    <input type="text" name="t1"></td><br><br>
				<td><b>Donor Name</b></td></td>
				<td>    <input type="text" name="t2"></td><br><br>
					<td><b>Donor ADDRESS</b></td>
				<td><input type="text" name="t3"></td><br><br>
					<td><b>Donor PHONE</b></td>
				<td><input type="number" name="t4"></td><br><br>
					<td><b>Donor PHONE2</b></td>
				<td><input type="number" name="t5"></td><br><br>
					<td><b>Donor EMAIL ID</b></td>
				<td><input type="text" name="t6"></td><br><br>
					<td><b>Donor PINCODE</b></td>
				<td><input type="number" name="t7"></td><br><br>
					<td><b>Donor BLOOD GR.</b></td>
				<td><select type="select" name="t8">
	<option value="">=SELECT BLOOD=</option>
<option value="A+">A+</option>
<option value="A-">A-</option>
<option value="B+">B+</option>
<option value="B-">B-</option>
<option value="O+">O+</option>
<option value="O-">O-</option>
<option value="AB(+)">AB+</option>
<option value="AB(-)">AB-</option>
<option value="BBG">BOMBAY BLOOD GR</option>
</select>

					<br><br>
				</div>
				<div class=".btn">
				<tr>
				<td  align="center"><input type="submit" name="submit" value="INSERT">
				<input type="submit" name="submit2" value="DELETE" >
				<input type="submit" name="submit3" value="UPDATE" >
					<input type="submit" name="submit4" value="DISPLAY" >
					<input type="submit" name="submit5" value="SEARCH" >
				</td></tr>
				</div>
				</form></center>
				<?php
				if(isset($_POST["submit"]))
				{
					mysqli_query($link,"insert into donor values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]','$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]')");
				}
				if(isset($_POST["submit2"]))
				{
					mysqli_query($link,"delete from donor where donor_name='$_POST[t2]'");
				}
				if(isset($_POST["submit3"]))
				{
					mysqli_query($link,"update donor set donor_name= '$_POST[t2]' , donor_address='$_POST[t3]' , phone='$_POST[t4]' , altrphone='$_POST[t5]' ,email= '$_POST[t6]' , pincode='$_POST[t7]' , bl='$_POST[t8]' where donor_id='$_POST[t1]'");
				}
				if(isset($_POST["submit4"]))
				{
					$res=mysqli_query($link,"select * from donor");
					echo "<table >";
					echo "<tr>";
						echo "<th>"; echo "DONOR-ID"; echo "</th>";
						echo "<th>"; echo "NAME"; echo "</th>";
						echo "<th>"; echo "ADDRESS"; echo "</th>";
						echo "<th>"; echo "PHONE"; echo "</th>";
						echo "<th>"; echo "PHONE2"; echo "</th>";
						echo "<th>"; echo "EMAIL-ID"; echo "</th>";
						echo "<th>"; echo "PINCODE"; echo "</th>";
						echo "<th>"; echo "BLOOD-GR."; echo "</th>";
						echo "</tr>";
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td>"; echo $row["donor_id"]; echo "</td>";
						echo "<td>"; echo $row["donor_name"]; echo "</td>";
						echo "<td>"; echo $row["donor_address"]; echo "</td>";
						echo "<td>"; echo $row["phone"]; echo "</td>";
						echo "<td>"; echo $row["altrphone"]; echo "</td>";
						echo "<td>"; echo $row["email"]; echo "</td>";
						echo "<td>"; echo $row["pincode"]; echo "</td>";
						echo "<td>"; echo $row["bl"]; echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				
				if(isset($_POST["submit5"]))
				{
					$res=mysqli_query($link,"select * from donor where donor_name='$_POST[t2]'");
					echo "<table border=1>";
					echo "<tr>";
						echo "<th>"; echo "donor_id"; echo "</th>";
						echo "<th>"; echo "donor_name"; echo "</th>";
						echo "<th>"; echo "donor_address"; echo "</th>";
						echo "<th>"; echo "phone"; echo "</th>";
						echo "<th>"; echo "altrphone"; echo "</th>";
						echo "<th>"; echo "email"; echo "</th>";
						echo "<th>"; echo "pincode"; echo "</th>";
						echo "<th>"; echo "bl"; echo "</th>";
						echo "</tr>";
					while($row=mysqli_fetch_array($res))
					{
						echo "<tr>";
						echo "<td>"; echo $row["donor_id"]; echo "</td>";
						echo "<td>"; echo $row["donor_name"]; echo "</td>";
						echo "<td>"; echo $row["donor_address"]; echo "</td>";
						echo "<td>"; echo $row["phone"]; echo "</td>";
						echo "<td>"; echo $row["altrphone"]; echo "</td>";
						echo "<td>"; echo $row["email"]; echo "</td>";
						echo "<td>"; echo $row["pincode"]; echo "</td>";
						echo "<td>"; echo $row["bl"]; echo "</td>";
						echo "</tr>";
					}
					echo "</table>";
				}
				?>
	



<div class="footer">
  <a href="" style="float: center;color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;float: left; background-color: #E9967A;">&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</a>
  <a href="" style="float: right; color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;float: right;background-color: #E9967A;">&copy;DESIGN BY AVICK,ARITRA,SUBRATA,SOURADEEP</a>
</div>

	</body>			
</html>