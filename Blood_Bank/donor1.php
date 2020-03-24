<html>
<head>
<title> exaple</title>
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">

<link rel="stylesheet" type="text/css" href="donor1.css">
<style>
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
select:hover{
background: linear-gradient(to top right, #33ccff 32%, #00ffcc 100%);
}
input:hover{
	color:#ff00ff;
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

<a href="search.html" class="previous round" >&#8249;</a>

<center><h3 style="background: linear-gradient(to right, #ccffff 46%, #66ccff 100%); "> <b>Search For Donors Details..................</b> </h3></center>
<?php
$servername="localhost";
$username="root";
$password="";
$db="project";
$con=mysqli_connect($servername,$username,$password,$db);
?>
<form action="#" method="post" id="myInput" >
<b>Blood:</b><select type="select" name="start">
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
<b>Pincode:</b><input type="text" name="end" size="20">
<input type="submit" value="Search" name="btn_search">
</form>
<table id="myTable">
  <tr class="header">
   <th style="width:20%;">NAME</th>
  <th style="width:20%;">ADDRESS</th>
	<th style="width:20%;">PHONE NO.</th>
	<th style="width:20%;">ALTERNATIVE PHONE NO.</th>
	<th style="width:20%;">EMAIL ID</th>
	<th style="width:20%;">BLOOD GR..</th>
 </tr>
 </table>
<?php
      if(isset($_POST['btn_search']))
	  {
		  $key1=$_POST["start"];
		  $key2=$_POST["end"];
		  $sql="select * from donor where bl like '%$key1%' and pincode like '%$key2%'";
		 
		  $query=mysqli_query($con,$sql);
	  while($row=mysqli_fetch_array($query))
	    {
			  ?>
			 


<table id="myTable">
			 <tr class="header">
			  <td style="width:20%;"><?php echo $row['donor_name']?></td>
			   <td style="width:20%;"><?php echo $row['donor_address']?></td>
			    <td style="width:20%;"><?php echo $row['phone']?></td>
				 <td style="width:20%;"><?php echo $row['altrphone']?></td>
				 <td style="width:20%;" ><?php echo $row['email']?></td>
				  <td style="width:20%;" ><?php echo $row['bl']?></td>
			  </tr>
			  </table>
			  <?php
		  }
	  }



?>
 <div class="navbar">
  <a href="" style="float: center;color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</a>
  <a href="" style="float: right; color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;DESIGN BY -----------------------</a>
</div>
</body>
</html>