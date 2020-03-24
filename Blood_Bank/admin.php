<?php include('serve.php');?>
<html>
<head>
  <title>Admin log</title>
  <meta charset="utf-8">
<meta name="viewport" content="width=device-width, initial-scale=1">
 <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
 <link rel="stylesheet" href="https://www.w3schools.com/w3css/4/w3.css">
  <link rel="stylesheet" type="text/css" href="login.css">




  <style >

body {
  margin: 0;
  font-family: Arial, Helvetica, sans-serif;
  background-image: url("sa.jpg");
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
<center>
  <div class="header">
    <h2> LogIn</h2>
  </div>

  <form method="post" action="admin.php">

    <div class="input-group">
      <label> UserName</label>
      <input type="text" name="username">
    </div>
   
    <div class="input-group">
      <label> Password</label>
      <input type="password" name="password">
    </div>
    
      <div class="input-group">
      <button type="submit" name="login" class="btn">LOGIN</button>
    </div>
      </form>
</center>

    <script>
// Get the modal
var modal = document.getElementById('id01');

// When the user clicks anywhere outside of the modal, close it
window.onclick = function(event) {
    if (event.target == modal) {
        modal.style.display = "none";
    }
}
</script>
    
  </form>
</center>

  <div class="navbar">
  <a href="" style="float: center;color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</a>
  <a href="" style="float: right; color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;DESIGN BY AVICK,SUBRATA,ARITRA,SOURADEEP</a>
</div>

  </body>
  </html>

