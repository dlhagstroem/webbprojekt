<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">
	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.min.css" type="text/css">
	<!--plats för javascript -->
	<!--plats för något annat kanske -->

	<!--databaskoppling-->
	<?php $mysqli = new mysqli("localhost","root","","webbprojekt"); ?>
</head>
<body>
	<div class="header">
		<div class="wrapper">
			<h1>Coola T-shirtar</h1>

			<ul class="nav">
				<li class="shirts"><a href="shirts.php">T-shirtar</a></li>
				<li class="contact"><a href="contact.php">Kontakt</a></li>
				<li class="chart"><a href="#">Varukorg</a></li>
			</ul>
		</div>
	</div>