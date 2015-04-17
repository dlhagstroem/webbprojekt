<?php
include('inc/header.php');

	if(isset($_GET['paketId']) && ($_SESSION['userId']) && $_SESSION['admin'] == true){
		$query = 
		'DELETE FROM paket
		WHERE paketId = "'.$_GET["paketId"].'"';

		$mysqli->query($query);
		header('Location:paket.php');
	}
		else{
			echo "Något fel inträffade";
		}
?>

<?php include("inc/footer.php"); ?>