<?php include('serve.php');?>

<html>
<head>
	<style>
		label{
			font-size: 25px;
		}
	</style>
	<title>Admin log</title>
	<link rel="stylesheet" type="text/css" href="log.css">
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
		<h2> Register</h2>
	</div>
	<form method="post" action="log.php">
	
	
               <?php include('errors.php');  ?>
		<div class="input-group"><br><br>
			<label> <i>UserName</i></label>
			<input type="text" name="username" value="<?php echo $username;?>" >
		</div><br><br><br><br>
		<div class="input-group">
			<label> <i>Email</i></label>
			<input type="text" name="email"  value="<?php echo $email;?>">
		</div><br><br><br><br>
		<div class="input-group">
			<label> <i>Password</i></label>
			<input type="password" name="password_1">
		</div><br><br><br><br>
		<div class="input-group">
			<label> <i>Confirm Password</i></label>
			<input type="password" name="password_2">
			</div><br><br><br><br><br>
			<div class="input-group">
			<select name="que" id="que" required>
				<option value=""><b>..CHOOSE YOUR QUESTION..</b></option>
				<option value="What is your favorite movie?">What is your favorite movie?</option>
				<option value="What is the name of your favorite pet?">What is the name of your favorite pet?</option>
				<option value="What is the first and last name of your first boyfriend or girlfriend?">What is the first and last name of your first boyfriend or girlfriend?
</option>
				<option value="What was the make of your first car?">What was the make of your first car?</option>
				<option value="What was your favorite place to visit as a child?">What was your favorite place to visit as a child? </option>
				<option value="What is the name of your first school?">What is the name of your first school? </option>
				<option value="What is your favorite color?">What is your favorite color? </option>
				<option value="Which is your favorite web browser?">Which is your favorite web browser?</option>
				<option value="what is your favorite online platform">what is your favorite online platform </option>
			</select><br><br><br>
			<input type="text" name="ques" required>
			</div>

			<div class="input-group">
			<button type="submit" name="register" class="btn">REGISTER</button>
		</div>
		<p>
			<b>Already Admin Member?</b> <a href="adminoption.php"><b>BACK</b></a>
		</p>
	</form>
</center>

	<div class="navbar">
  <a href="" style="float: center;color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;A PROTOTYPE WEBSITE FOR NIIT PROJECT</a>
  <a href="" style="float: right; color:blue;font-family: Courier New;font-variant: small-caps;font-size: 20px;">&copy;DESIGN BY -----------------------</a>
</div>
	</body>
	</html>
