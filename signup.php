<!DOCTYPE html>
<html lang="en">
<head>	
	<meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">	
	<link rel="stylesheet" type="text/css" href="css/style.css">	
	<link rel="shortcut icon" type="image/png" href="images/icon.png"> 
	<title>Sign Up Page</title>	
</head>
<body>
		<form class="box" action="registration.php" method="post">
		<h1>Sign Up</h1>
		<input type="text" placeholder="Full Name" name="fullname" required="">
		<input type="email" placeholder="Email" name="email" required="">
		<input type="text" placeholder="Phone Number" name="phone" required="">
		<input type="text" placeholder="Address" name="address" required="">
		<input type="text" placeholder="Car License Number" name="cln" required="">
		<input type="text" placeholder="Car Engine Number" name="cen" required="">
		<input type="password" placeholder="Password" name="pass" required="">				
		<input type="password" placeholder="Confirm Password" name="cpass" required>		
		<input type="submit" name="submit" value="Submit">		
		<p>Already a member?</p>
		<a href="index.php">Sign In</a>
		</form>
</body>
</html>