<?php

require_once('connection.php');
	if(isset($_POST['login'])) {
	
	session_start();

	$email = $_POST['email'];
	$apass = $_POST['pass'];
	$pass = sha1($apass);
	
	
	// user account validation

	$u = "select * from user where mail = '$email' && password = '$pass'";

	$resultu = mysqli_query($conn, $u);

	$numu = mysqli_num_rows($resultu);

	//admin account validation

	$a = "select * from admin where name = '$email' && pass = '$apass'";

	$resulta = mysqli_query($conn, $a);

	$numa = mysqli_num_rows($resulta);
	
	if($numu == 1){
		$_SESSION['email'] = $email;

			header('location:user.php');
			exit();
		}			

	elseif($numa == 1) {
		$_SESSION['name'] = $email;
			header('location:admin.php');
	 	exit();
		}

	else{
		header('location:index.php?error');
		exit();
		}
	}

	else{
		header('Location:index.php?error');
		exit();
	}