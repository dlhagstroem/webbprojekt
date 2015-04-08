<html>
<head>
	<title><?php echo $pageTitle; ?></title>
	<meta charset="utf-8">

	<link rel="stylesheet" href="css/style.css" type="text/css">
	<link rel="stylesheet" href="css/bootstrap.css" type="text/css">
	<!--plats för javascript -->
	<!--plats för något annat kanske -->
	<link href='http://fonts.googleapis.com/css?family=Roboto' rel='stylesheet' type='text/css'>

	<!--databaskoppling + utf8-->
	<?php 	$mysqli = new mysqli("ideweb2.hh.se","denhag12","RTGyYphr3v","denhag12_db");
			$mysqli->set_charset("utf8"); ?>
</head>
<body>
<?php include("nav.php"); ?>

