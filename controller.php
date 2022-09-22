<?php 

function base_url(){
	return "http://" . $_SERVER['SERVER_NAME']."/web_based_career_recommender";
}

session_start();
if(isset($_GET['page'])){
	if($_GET['page']=="login"){
		if(isset($_SESSION['loggedIn']) == true){
			header("Location: ".base_url());
		}else{
			require ('login.php');
		}

	}else if($_GET['page']=="register"){
		if(isset($_SESSION['loggedIn']) == true){
			header("Location: ".base_url());
		}else{
			require ('register.php');
		}

	}else if($_GET['page']=="my-profile"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('my-profile.php');
		}else{
			header("Location: ".base_url());
		}

	}else if($_GET['page']=="home"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('home.php');
		}else{
			header("Location: ".base_url());
		}

	}else if($_GET['page']=="career"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('career.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="take-test"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('take-test.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="test-result"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('test-result.php');
		}else{
			header("Location: ".base_url());
		}
	}
	else if($_GET['page']=="about"){
		if(isset($_SESSION['loggedIn']) == true){
			require ('about.php');
		}else{
			header("Location: ".base_url());
		}
	}else if($_GET['page']=="feedbacks"){
		if(isset($_SESSION['loggedIn']) && $_SESSION['u_role'] == "admin"){
			require ('feedbacks.php');
		}else{
			header("Location: ".base_url());
		}
	}else{
		echo '404';
	}
}
?>