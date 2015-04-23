<?php
$pageTitle  = "Ändra produkt";
include('inc/header.php');

if(isset($_GET['paketId'])){	

	if(isset($_POST['name']) && ($_SESSION['admin']) && $_SESSION['admin'] == true){
		$query = 
		"INSERT INTO paket(name,price,description,orginfo,included,img_src)
		VALUES ('" .$_POST['name']. "',
				'" .$_POST['price']. "',
				'" .$_POST['description']. "',
				'" .$_POST['orginfo']. "',
				'" .$_POST['included']. "',
				'" .$_POST['img_src']. "')";

		$mysqli->query($query);	
	}
}?>

<?php
	
	$query = 
	"SELECT * FROM paket
	WHERE paketId = '".$_GET['paketId']."'";

$res = $mysqli->query($query);

	if($res->num_rows > 0)
	{
		$row = $res->fetch_object();
?>

		<form method="post" action="edit_product.php?id=<?php echo $row->paketId; ?>">
		<input type="text" name="name" value="<?php echo $row->name; ?>">
		<input type="text" name="price" value="<?php echo $row->price; ?>">
		<textarea name="description" value="<?php echo $row->description; ?>"></textarea>
		<textarea name="orginfo" value="<?php echo $row->orginfo; ?>"></textarea>
		<textarea name="included" value="<?php echo $row->included; ?>"></textarea>
		<input type="text" name="img_src" value="<?php echo $row->img_src; ?>">
		<input type="submit" Value="Spara">
		</form>

<?php } ?>