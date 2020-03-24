<?php include('server.php');?>
<?php include('errors.php');  ?>
<?php   
    $con=mysqli_connect("localhost", "root", "", "project");
    $ip = $_SERVER['REMOTE_ADDR'];
   $sql = "INSERT INTO visitors(ip) VALUES ('$ip')";
    mysqli_query($con, $sql);
$select = "SELECT * FROM visitors";
$count_visitors = mysqli_num_rows(mysqli_query($con, $select));

?>
<!DOCTYPE html>
<html>
<head>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
<link rel="stylesheet" type="text/css" href="1st.css">
<style>
 .footer {
   position: fixed;
   left: 0;
   bottom: 0;
   width: 100%;
   height: 8%;
   background-image:url("bc.jpg");
   color: blue;
    border-radius: 10px;
   text-align: center;
   font-family: Lucida Console;
}

@media only screen and (max-width:800px) {
  /* For tablets: */
  .main {
    width: 80%;
    padding: 0;
  }
  .right {
    width: 100%;
  }
}
@media only screen and (max-width:500px) {
  /* For mobile phones: */
  .menu, .main, .right {
    width: 100%;
  }
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


<div class="slideshow-container">

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a1.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a2.jpg" style="width:100%">
  <div class="text"></div>
</div>

<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a3.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a4.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a5.jpg" style="width:100%">
  <div class="text"></div>
</div>
<div class="mySlides fade">
  <div class="numbertext"></div>
  <img src="a6.jpg" style="width:100%">
  <div class="text"></div>
</div>

</div>
<br>





<video autoplay muted loop class="myVideo">
  <source src="v.mp4" type="video/mp4">

  Your browser does not support HTML5 video.
</video>

<div class="reg">
  <div><p><b>U CAN FINS ANY BLOOD GROUP DONOR OR BLOOD BANK DETAILS IN OUR WEBSITE</b></p>
 <form  method="POST"  action="server.php" >
<table>
    <thead>
    <tr><th colspan="4" style="color:blue;font-family: Georgia;">PLEASE ENTER YOUR PHONE NUMBER</th></tr>
    </thead>
    <tbdoy>
    <tr><td><input type="number" name="sec" id="sec" required></td>
      <td><button type="submit" name="secs" id="secs" style="width: 100px;color:blue;">ENTER</button></td></tr></tbdoy>
</table>
</form>
</div>
      <div class="content">   
<button onclick="document.getElementById('id01').style.display='block'" class="option" style="width: 200px;color:blue;" >FIRST VISITOR ENTER DETAILS</button>




</div>
</div>
  

<div class="footer">
  <div>
  <h2 style="float:left;font-size: 15px;">&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</h2>
<tr><td style="float:center;"><b>SITE VISIT:</b></td> <td><b><?php echo $count_visitors;?> </b></td></tr>
<h3 style="float: right;font-size: 15px;">DESIGN & DEVELOP BY AVICK,SUBRATA,ARITRA,SOURADEEP&COPY;</h3></div>
</div>


   
<div id="id01" class="modal">
  <span onclick="document.getElementById('id01').style.display='none'" class="close" title="Close Modal">&times;</span>
<form class="modal-content" action="insert.php" method="post">

  <div class="container" id="bg">
        <h1><b><u>ENTER ALL DETAILS.</u></b></h1>
    <br>
<center>
    <label for="id" style="color:blue;"><b>NAME</b></label>
    <input type="text"  name="name" required><br>

    <label for="name" style="color:blue;"><b>PHONE NUMBER</b></label>
    <input type="number"  name="phonenumber" required><br>

    <label for="age" style="color:blue;"><b>ADDRESS</b></label>
    <input type="text" name="address" required><br>
    <label for="age" style="color:#ff9900"><b>PINCODE</b></label>
    <input type="number" name="pincode" required><br>
  <label for="age" style="color:#ff9900;"><b>BLOOD GROUP</b></label>
    <input type="text" name="bloodgr" required>
    <br>
  </center>
 <div class="clearfix">
        <button type="button" onclick="document.getElementById('id01').style.display='none'" class="cancelbtn" style="color:blue;">CANCEL</button>
   <button type="submit" class="signupbtn" style="color:blue;">REGISTER</button>
  </div>
 
</form>
</div>

<script>

var modal = document.getElementById('id01');


window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}



function myFunction() {
  if (video.paused) {
    video.play();
    btn.innerHTML = "Pause";
  } else {
    video.pause();
    btn.innerHTML = "Play";
  }
}




var myIndex = 0;
carousel();

function carousel() {
  var i;
  var x = document.getElementsByClassName("mySlides");
  for (i = 0; i < x.length; i++) {
    x[i].style.display = "none";  
  }
  myIndex++;
  if (myIndex > x.length) {myIndex = 1}    
  x[myIndex-1].style.display = "block";  
  setTimeout(carousel, 2000); // Change image every 2 seconds
}



function myFunction() {
  var x = document.getElementById("myTopnav");
  if (x.className === "topnav") {
    x.className += " responsive";
  } else {
    x.className = "topnav";
  }
}
</script>

</body>
</html> 
