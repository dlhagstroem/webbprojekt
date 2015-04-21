<?php
$pageTitle ="Lägg till paket";
include('inc/header.php');

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
		echo '<div class="container" style="width:30% margin-bottom:10px;">
				<div class="row center-block">
				<div class="col-lg-12 center-block">
				<div class="alert alert-success center-block" role="alert">
					Produkten har nu lagts till i databasen</div>
				</div>
				</div>
				</div>';
	}
?>

<div id="mainstyle" class="container" style="width:30%">
	<div class="row center-block">
		<div class="col-lg-12 center-block">
			<h1 class="text-center">Lägg till paket</h1>

			<form method="post" action="add_paket.php">
			<div class="form-group">
			<input type="text" name="name" class="form-control" placeholder="Paketnamn">
			</div>
  			<div class="form-group">
			<input type="text" name="price" class="form-control" placeholder="Pris">
			</div>
  			<div class="form-group">
			<textarea name="description" class="form-control" placeholder="Beskrivning"></textarea>
			</div>
			<div class="form-group">
			<textarea name="orginfo" class="form-control" placeholder="Kort beskrivning av organisationen paketet stöds av"></textarea>
			</div>
			<div class="form-group">
			<textarea name="included" class="form-control" placeholder="<strong>Ska innehålla; Gåva, Produkt & gåvobevis."></textarea>
			<div class="alert alert-info" role="alert">Informationen ska skrivas in så här:<br>
			<*strong>Gåva:<*/strong> xxkr<*br><br><em>Men utan *</em></div>
			</div>
			<div class="form-group">
			<input type="text" name="img_src" class="form-control" placeholder="Produkt bild (img/imagename.png)">
			</div>
			<button type="submit" class="btn btn-default center-block">Lägg till produkt</button>
			</form>

		</div>
	</div> <!-- row end -->
</div> <!-- container end -->
	
<?php include("inc/footer.php"); ?>