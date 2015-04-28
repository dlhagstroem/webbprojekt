<?php ini_set("display_errors", 1); error_reporting(E_ALL); ?>
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

<div id="mainstyle" class="container" style="width:30%">
	<div class="row center-block">
		<div class="col-lg-12 center-block">
			<h1 class="text-center">Ändra ett paket</h1>

		<form method="post" action="edit_product.php?id=<?php echo $row->paketId; ?>">
			<div class="form-group">
			<input type="text" name="name" class="form-control" value="<?php echo $row->name; ?>">
			</div>
  			<div class="form-group">
			<input type="text" name="price" class="form-control" value="<?php echo $row->price; ?>">
			</div>
  			<div class="form-group">
			<textarea name="description" class="form-control" value="<?php echo $row->description; ?>"></textarea>
			</div>
			<div class="form-group">
			<textarea name="orginfo" class="form-control" value="<?php echo $row->orginfo; ?>"></textarea>
			</div>
			<div class="form-group">
			<textarea name="included" class="form-control" value="<?php echo $row->included; ?>"></textarea>
			</div>
			<div class="form-group">
			<input type="text" name="img_src" class="form-control" value="<?php echo $row->img_src; ?>">
			</div>
			<button type="submit" class="btn btn-default center-block">Spara</button>
			</form>

<?php } ?>	

		</div>
	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>