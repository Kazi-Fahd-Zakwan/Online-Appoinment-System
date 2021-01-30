<?php

require_once('connection.php');
	if (isset($_POST['submit'])) {
	
	session_start();		

	$name = $_POST['fullname'];
	$address = $_POST['address'];		
	$email = $_POST['email'];
	$phone = $_POST['phone'];
	$cln = $_POST['cln'];
	$cen = $_POST['cen'];
	$pass = sha1($_POST['pass']);
	$cpass = sha1($_POST['cpass']);
	
	$u = "select * from user where mail = '$email'";

	$resultu = mysqli_query($conn, $u);

	$numu = mysqli_num_rows($resultu);

	$a = "select * from admin where name = '$email'";

	$resulta = mysqli_query($conn, $a);

	$numa = mysqli_num_rows($resulta);

	if($numu == 1){
	header("Location: signup.php?username_already_taken");
	exit();
	}

	elseif($numa == 1){
	header("Location: signup.php?username_already_taken");
	exit();
	}

	else{
		if ($pass != $cpass) {
		header("location: signup.php?password_mismatch");
			exit();
	}
	else{
		$reg = "insert into user (name, mail, address, mobile, lin, eng, password) values ('$name', '$email', '$address', '$phone', '$cln', '$cen', '$pass')";				
		mysqli_query($conn, $reg);
		$_SESSION['email'] = $email;
		header("Location: user.php?registration_successful");
		}
	}
}
else{
	header("Location: signup.php?error");
	exit();
}