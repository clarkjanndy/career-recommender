<?php
session_start();
require '../config.php';

if(isset($_POST['feedback']) && isset($_SESSION['loggedIn']) && isset($_GET['add-feedback'])){
	$feedback = $_POST['feedback'];
	$feedback = htmlspecialchars($feedback, ENT_QUOTES);	

	$sql = "INSERT INTO feedbacks (f_content,f_u_id,f_status,f_date) VALUES 
	('".$feedback."', '".$_SESSION['u_id']."','New',now())";

	if($conn->query($sql)){	
		header('Location: ../controller.php?page=test-result');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();


}else if(isset($_POST['feedback']) && isset($_SESSION['loggedIn']) && isset($_GET['edit-feedback'])){
	$feedback = $_POST['feedback'];
	$feedback = htmlspecialchars($feedback, ENT_QUOTES);	


	$sql = "UPDATE  feedbacks SET f_content='".$feedback."',f_date = now(), f_status= 'Edited'
	WHERE f_u_id = '".$_SESSION['u_id']."'";

	if($conn->query($sql)){	
		header('Location: ../controller.php?page=test-result');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();


}else if(isset($_POST['reply']) && isset($_SESSION['loggedIn']) && isset($_GET['reply-feedback'])){
	$reply = $_POST['reply'];
	$reply = htmlspecialchars($reply, ENT_QUOTES);	

	$sql = "DELETE from replies WHERE r_f_id = '".$_GET['f_id']."'";
	if($conn->query($sql)){}

	$sql = "INSERT INTO replies (r_content,r_f_id,r_u_id,r_date) VALUES 
	('".$reply."','".$_GET['f_id']."','".$_SESSION['u_id']."', now())";

	if($conn->query($sql)){	
		$sql = "UPDATE feedbacks SET f_status = 'Replied' WHERE f_id = '".$_GET['f_id']."'";
		if($conn->query($sql)){}
			header('Location: ../controller.php?page=feedbacks');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();

}else{
	header('Location: ../controller.php?page=home');
}

?>