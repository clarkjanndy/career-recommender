<?php
session_start();
require '../config.php';

if(isset($_GET['type']) && $_GET['type'] == "personal"){
	$fname = $_POST['fname'];
	$mname = $_POST['mname'];
	$lname = $_POST['lname'];
	$xname = $_POST['xname'];
	$mobile = $_POST['mobile'];
	$address = $_POST['address'];
	$gender = $_POST['gender'];
	$status = $_POST['status'];
	$religion = $_POST['religion'];
	$school = $_POST['school'];
	$year = $_POST['year'];
	
	
	$sql = "UPDATE users SET 
	u_fname	= '".$fname."',
	u_mname	= '".$mname."', 
	u_lname	= '".$lname."',
	u_ext	= '".$xname."',
	u_mobile = '".$mobile."',
	u_address = '".$address."',
	u_gender = '".$gender."',
	u_status = '".$status."',
	u_religion = '".$religion."',
	u_school = '".$school."',
	u_year = '".$year."'
	WHERE u_id = '".$_SESSION['u_id']."'";
	if($conn->query($sql)){
		$_SESSION['u_fullname'] = $fullname;
		header('Location: ../controller.php?page=my-profile');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();
	
}else if(isset($_GET['type']) && $_GET['type'] == "login"){
	$username = $_POST['username'];
	$password = $_POST['password'];
	
	$sql = "UPDATE users SET 
	u_username	= '".$username."', 
	u_password = '".$password."'
	WHERE u_id = '".$_SESSION['u_id']."'";
	if($conn->query($sql)){
		$_SESSION['u_username'] = $username;
		$_SESSION['u_password'] = $password;
		header('Location: ../controller.php?page=my-profile');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();
	
}else if(isset($_GET['type']) && $_GET['type'] == "reset"){
	$password = "P@ssw0rd";
	$sql = "UPDATE users SET u_password = '".$password."' WHERE u_id = '".$_SESSION['u_id']."'";
	if($conn->query($sql)){
		$_SESSION['u_password'] = $password;
		header('Location: ../controller.php?page=my-profile');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();
	
}else if(isset($_GET['type']) && $_GET['type'] == "add"){
	$title = $_POST['title'];
	$content = $_POST['content'];
	$sql = "INSERT INTO other_inf (inf_title, inf_content, inf_u_id) VALUES 
			('".$title."', '".$content."', '".$_SESSION['u_id']."')";
	if($conn->query($sql)){
		$_SESSION['u_password'] = $password;
		header('Location: ../controller.php?page=my-profile');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();
	
}else if(isset($_GET['type']) && $_GET['type'] == "delete"){
	$inf_id = $_GET['inf_id'];
	$sql = "DELETE FROM other_inf WHERE inf_id = ".$inf_id."";
	if($conn->query($sql)){
		$_SESSION['u_password'] = $password;
		header('Location: ../controller.php?page=my-profile');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();
	
}else{
	header('Location: ../controller.php?page=home');
}
?>