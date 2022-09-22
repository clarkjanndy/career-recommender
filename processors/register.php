<?php

register();

function register(){
	require '../config.php';
	if(isset($_POST['fname'])
		&&isset($_POST['mname'])
		&&isset($_POST['lname'])
		&&isset($_POST['xname'])
		&&isset($_POST['email'])
		&&isset($_POST['username'])
		&&isset($_POST['password'])){
		$fname = $_POST['fname'];
		$mname = $_POST['mname'];
		$lname = $_POST['lname'];
		$xname = $_POST['xname'];
		$email = $_POST['email'];
		$username = $_POST['username'];
		$password = $_POST['password'];
		$mobile = "---";
		$address = "---";
		$gender = "Male";
		$status = "Single";
		$religion = "---";
		$year = " ";
		$school = " ";

		$available = checkEmailAvailability($email);

		if($available){
			$sql = "INSERT INTO users (u_fname, u_mname , u_lname, u_ext, u_email, u_username, u_password, u_mobile, u_address, u_gender, u_status, u_religion, u_year, u_school, u_role) VALUES 
			('".$fname."', '".$mname."', '".$lname."' , '".$xname."', '".$email."', 
			'".$username."','".$password."','".$mobile."', '".$address."' ,'".$gender."',
			'".$status."','".$religion."','".$year."','".$school."','user')";

			if($conn->query($sql)){
				session_start();
				session_destroy();
				header('Location: ../controller.php?page=login');
			}else{
				echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
			}
		}else{
			session_start();
			$_SESSION['err_fname'] = $fname;
			$_SESSION['err_mname'] = $mname;
			$_SESSION['err_lname'] = $lname;
			$_SESSION['err_xname'] = $xname;
			$_SESSION['err_email'] = $email;
			$_SESSION['err_username'] = $username;
			$_SESSION['err_password'] = $password;
			header('Location: ../controller.php?page=register&error');
			echo "string1";
		}
	}else{
		header('Location: ../controller.php?page=home');
		echo "string2";
	}$conn->close();
}

function checkEmailAvailability($email) {
	require '../config.php';
	$ava = False;
	$sql = "SELECT * FROM users WHERE u_email = '".$email."'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		$ava = False;
	}else{
		$ava = True;
	}
	return $ava;
}



?>