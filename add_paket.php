<?php
$pageTitle ="Lägg till paket";
include('inc/header.php');

	if(isset($_POST['name']) && ($_SESSION['admin']) && $_SESSION['admin'] == true){
		$query = 
		"INSERT INTO paket(name,price,description)
		VALUES ('" .$_POST['name']. "',
				'" .$_POST['price']. "',
				'" .$_POST['description']."')";


		$mysqli->query($query);
		echo 'Produkt har lagts till i databasen';
	}
?>


	<form method="post" action="add_paket.php">
	<input type="text" name="name" placeholder="Paketnamn">
	<input type="text" name="price" placeholder="Pris">
	<textarea name="description" placeholder="Beskrivning"></textarea>
	<input type="submit" Value="Lägg till produkt">
	</form>
	
<?php include("inc/footer.php"); ?>