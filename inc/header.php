<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!--plats för javascript -->
	<!--plats för något annat kanske -->

	<!--databaskoppling + utf8-->
	<?php 	$mysqli = new mysqli("localhost","root","","webbprojekt");
			$mysqli->set_charset("utf8"); ?>
</head>
<body>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Coola T-shirtar</h1>
			</div>
			<div class="col-lg-12">
				<ul class="nav">
					<li class="shirts"><a href="shirts.php">T-shirtar</a></li>
					<li class="contact"><a href="contact.php">Kontakt</a></li>
					<li class="chart"><a href="#">Varukorg</a></li>
				</ul>
			</div>
		</div>
	</div>