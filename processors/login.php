<?php 

if(isset($_POST['email']) && isset($_POST['password'])){
	$email = $_POST['email'];
	$password = $_POST['password'];
	login($email, $password);
}else{
	header('Location: ../controller.php?page=home');
}


function login($email, $pword){
	require '../config.php';

	$sql = "SELECT * FROM users WHERE u_email = '".$email."' AND u_password = '".$pword."'";
	$result = $conn->query($sql);
	if ($result->num_rows == 1) {
		while($row = $result->fetch_assoc()) {
			session_start();
			$_SESSION['loggedIn'] = true;
			$_SESSION['u_id'] = $row['u_id'];
			$_SESSION['u_role'] = $row['u_role'];
			$_SESSION['u_fname'] = $row['u_fname'];
			$_SESSION['u_mname'] = $row['u_mname'];
			$_SESSION['u_lname'] = $row['u_lname'];
			$_SESSION['u_ext'] = $row['u_ext'];
			$_SESSION['u_email'] = $row['u_email'];
			$_SESSION['u_username'] = $row['u_username'];
			$_SESSION['u_password'] = $row['u_password'];
			$_SESSION['u_test_attempt'] = $row['u_test_attempt'];
		}
		header('Location: ../controller.php?page=home');
	}else{
		session_start();
		$_SESSION['err_email'] = $email;
		$_SESSION['err_password'] = $pword;

		header('Location: ../controller.php?page=login&error');
	}
	
}$conn->close();


?>