<?php

if(isset($_GET['from']) && $_GET['from'] == "career"){
	$s = $_POST['c_search'];
	header('Location: ../controller.php?page=career&search='.$s);
}else if(isset($_GET['from']) && $_GET['from'] == "feedbacks"){
	$s = $_POST['c_search'];
	header('Location: ../controller.php?page=feedbacks&search='.$s);
}else{
	header('Location: ../controller.php?page=home');
}

?>