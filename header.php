<?php 
$current_page_name = basename($_SERVER['REQUEST_URI']);
 ?>
<!DOCTYPE html>
<html>
<head>
	<title>Outbox</title>
	<link rel="stylesheet" type="text/css" href="css/style.css">
</head>
<body>
<div class="container-fluid">
	<header>
		<div class="row">
			<div class="col-lg-2" id="logo">
				<a href="index.php">
					<img src="images/logo.png" alt="">
				</a>
			</div>
			<div class="col-lg-offset-6 col-lg-4" id="menu">
				<ul>
					<?php 
					if ($current_page_name == "portfolio.php") {
						echo '<a href="portfolio.php" ><li style="color:#B6B0B0;">PORTFOLIO</li></a>';
					}
					else
					{
						echo '<a href="portfolio.php"><li>PORTFOLIO</li></a>';
					}

					if ($current_page_name == "partnerwithus.php") {
						echo '<a href="partnerwithus.php" ><li style="color:#B6B0B0;">PARTNER WITH US</li></a>';
					}
					else
					{
						echo '<a href="partnerwithus.php"><li>PARTNER WITH US</li></a>';
					}
					?>
				</ul>
			</div>
		</div>
	</header>
	<div id="main-body">