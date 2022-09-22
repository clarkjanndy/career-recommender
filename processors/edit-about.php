<?php
require '../config.php';

if(isset($_GET['id'])){
	$id = $_GET['id'];
	$title = $_POST['title'];
	$content = $_POST['content'];
    $content = htmlspecialchars($content, ENT_QUOTES);	
	
	
	$sql = "UPDATE about_info SET 
	ab_title	= '".$title."', 
	ab_content = '".$content."'
	WHERE ab_id = '".$_GET['id']."'";
	if($conn->query($sql)){
		$_SESSION['u_fullname'] = $fullname;
		header('Location: ../controller.php?page=about');
	}else{
		echo "ERROR: Could not able to execute $sql. " . mysqli_error($conn	);
	}
	$conn->close();
	
}else{
	header('Location: ../controller.php?page=home');
}
?>