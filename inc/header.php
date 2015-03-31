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
<?php include("nav.php"); ?>
	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Coola T-shirtar</h1>
			</div>
		</div>
	</div>

