<?php
$link=mysqli_connect("localhost","root","");
mysqli_select_db($link,"project");
 ?>



<!DOCTYPE html>
<html>
<head>
 <meta charset="utf-8">
  <meta name="viewport" content="width=device-width, initial-scale=1">
  <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/css/bootstrap.min.css">
  <script src="https://ajax.googleapis.com/ajax/libs/jquery/3.4.1/jquery.min.js"></script>
  <script src="https://cdnjs.cloudflare.com/ajax/libs/popper.js/1.14.7/umd/popper.min.js"></script>
  <script src="https://maxcdn.bootstrapcdn.com/bootstrap/4.3.1/js/bootstrap.min.js"></script>
  <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/4.7.0/css/font-awesome.min.css">
   <link rel="stylesheet" type="text/css" href="feedback.css">
<style >
  * {
  box-sizing: border-box;

}


input[type=text], select, textarea{
  width: 100%;
  padding: 12px;
  border: 1px solid #ccc;
  border-radius: 4px;
  resize: vertical;
  border:3px  double blue;
}

label {
  padding: 12px 12px 12px 0;
  display: inline-block;
}

input[type=submit] {
  background-color: #4CAF50;
  color: white;
  padding: 12px 20px;
  border: none;
  border-radius: 4px;
  cursor: pointer;
  float: right;

}

input[type=submit]:hover {
  background-color: #45a049;
}

.container {
  border-radius: 5px;
  background-image: url("qq.jpg");
  padding: 20px;
    background-position: center;
  background-repeat: no-repeat;
  background-size: cover;
}

.col-25 {
  float: left;
  width: 25%;
  margin-top: 6px;
}

.col-75 {
  float: left;
  width: 75%;
  margin-top: 6px;
}

/* Clear floats after the columns */
.row:after {
  content: "";
  display: table;
  clear: both;

}

/* Responsive layout - when the screen is less than 600px wide, make the two columns stack on top of each other instead of next to each other */
@media screen and (max-width: 600px) {
  .col-25, .col-75, input[type=submit] {
    width: 100%;
    margin-top: 0;
  }
}
.foot{
  background-image: url("qw.jpeg");
}
</style>

</head>
<body>
<div class="topnav" id="myTopnav">
  <a href="home.html" class="active"><b>A PRECIOUS GIFT FOR LIFE</b></a>
  <a href="home.html" style="float: right;"><b>HOME</b></a>
  <a href="blood.html" style="float: right;"><b>BLOOD DETAILS</b></a>
  <a href="about.html" style="float: right;"><b>ABOUT</b></a>
   <a href="feed.php" style="float: right;"><b>FEEDBACK</b></a>
    <a href="admin.php" style="float: right;"><b>ADMIN</b></a>
  <a href="javascript:void(0);" class="icon" onclick="myFunction()">
    <i class="fa fa-bars"></i>
  </a>
</div>

<div class="container">
  <form name="form1" action="" method="post">
  <div class="row">

                <div class="col-sm-12 form-group">
                <label><b>How do you rate your overall experience?</b></label>
				
                <p style="float: right;">
                    <label class="radio-inline">
                    <input type="radio" name="t1" id="radio_experience" value="bad" style="  border:3px  double blue;" required >
                    <b>Bad</b>
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="t1" id="radio_experience" value="average" style="  border:3px  double blue;" required>
                    <b>Average</b>
                    </label>

                    <label class="radio-inline">
                    <input type="radio" name="t1" id="radio_experience" value="good" style="  border:3px  double blue;" required >
                    <b>Good</b>
                    </label>
                </p>
				
                </div>
            </div>  
    <div class="row">
      <div class="col-25">
        <label for="fname"><b>First Name</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="fname" name="t2" placeholder="Your name.."  required>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="lname"><b>Last Name</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="lname" name="t3" placeholder="Your last name.." required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname"><b>Mobile No</b></label>
      </div>
      <div class="col-75">
        <input type="number" id="mobileno" name="t4" placeholder="Your mobile no.."  style="  border:3px  double blue;" required>
      </div>
    </div>
	<div class="row">
      <div class="col-25">
        <label for="lname"><b>Email</b></label>
      </div>
      <div class="col-75">
        <input type="text" id="email" name="t5" placeholder="Your email.." required>
      </div>
    </div>
	
	<div class="row">
      <div class="col-25">
        <label for="country"><b>State</b></label>
      </div>
      <div class="col-75">
        <select id="state" name="t6">
          <option value="West Bengal">West Bengal</option>
        </select>
      </div>
    </div>
    <div class="row">
      <div class="col-25">
        <label for="country"><b>City</b></label>
      </div>
      <div class="col-75">
        <select id="country" name="t7" required>
          <option value="KOLKATA">KOLKATA</option>
          <option value="DURGAPUR">DURGAPUR</option>
          <option value="SILIGURI">SILIGURI</option>
          <option value="ASANSOL">ASANSOL</option>
          <option value="BARDHAMAN">BARDHAMAN</option>
          <option value="HOWRAH">HOWRAH</option>
          <option value="MIDNAPORE">MIDNAPORE</option>
          <option value="DARJEELING">DARJEELING</option>
          <option value="HOOGHLY">HOOGHLY</option>
          <option value="NADIA">NADIA</option>
          <option value="HALDIA">HALDIA</option>
          <option value="BERHAMPORE">BERHAMPORE</option>
          <option value="BIRBHUM">BIRBHUM</option>
          <option value="MALDA">MALDA</option>
          <option value="BARRACKPORE">BARRACKPORE</option>
          <option value="BIDHANNAGAR">BIDHANNAGAR</option>
          <option value="BARASAT">BARASAT</option>
          <option value="JALPAIGURI">JALPAIGURI</option>
        </select>
      </div>
    </div>
	
    <div class="row">
      <div class="col-25">
        <label for="subject"><b>Coments</b></label>
      </div>
      <div class="col-75">
        <textarea id="subject" name="t8" placeholder="Write something.." style="height:200px" required></textarea>
      </div>
    </div>
    <div class="row">
      <input type="submit" name="submit" id="submit" value="Submit" style="background-color:#ff3300;">
    </div>
	
  </form>
</div>
<br>

<br>

<div class="foot">
  <a href="" style="float: center;color:white;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</a>
  <a href="" style="float: right; color:white;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;DESIGN BY AVICK,ARITRA,SUBRATA,SOURADEEP</a>
</div>





        <?php
        if(isset($_POST["submit"]))
        {
          mysqli_query($link,"insert into feedback values('$_POST[t1]','$_POST[t2]','$_POST[t3]','$_POST[t4]', '$_POST[t5]','$_POST[t6]','$_POST[t7]','$_POST[t8]')");
        }
?>

</body>
</html>