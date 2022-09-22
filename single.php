<!DOCTYPE html>
<html>

<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1.0">
	<meta http-equiv="X-UA-Compatible" content="IE=edge">

	<title>Web Based Career Recommender System</title>
	<link rel="shortcut icon" type="image/jpg" href="images/logo.png"/>

	<<!-- Bootstrap CSS -->
	<link rel="stylesheet" href="bootstrap/css/bootstrap.min.css">
	<!-- Bootstrap Icons CSS -->
	<link rel="stylesheet" href="https://cdn.jsdelivr.net/npm/bootstrap-icons@1.7.0/font/bootstrap-icons.css">
	<!-- Our Custom CSS -->
	<link rel="stylesheet" href="style.css">


</head>

<body>
	<?php 
	require('config.php');
	$info = array();
	$sql = "SELECT * FROM about_info WHERE ab_id = '".$_GET['id']."'";
	$result = $conn->query($sql);
	if ($result->num_rows > 0) {
		while($row = $result->fetch_assoc()) {
			$info = $row; 
		}
	}
	?>

	<div class="container">
		<div class="row mt-5">

			<h3><?php echo $info['ab_title']?></h3>
			<?php 
			$content = str_replace(array("\r\n", "\n"), array("<br />", "<br />"), $info['ab_content']);
			?>
			<p class="text-justify"><?php echo  $content;?><p>

			</div>
		</div>
	</body>

	<!-- jQuery CDN - Slim version (=without AJAX) -->
	<script src="bootstrap/js/slim.js"></script>
	<!-- Popper.JS -->
	<script src="bootstrap/js/popper.js"></script>
	<!-- Bootstrap JS -->
	<script src="bootstrap/js/bootstrap.js"></script>
	<!-- jQuery Custom Scroller CDN -->
	<script src="bootstrap/js/scroller.js"></script>

	<script type="text/javascript">
		$(document).ready(function () {
			$("#sidebar").mCustomScrollbar({
				theme: "minimal"
			});

			$('#sidebarCollapse').on('click', function () {
				$('#sidebar, #content').toggleClass('active');
				$('.collapse.in').toggleClass('in');
				$('a[aria-expanded=true]').attr('aria-expanded', 'false');
			});
		});
	</script>

	</html>
