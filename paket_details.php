<?php
$pageTitle ="Paketdetaljer";
include('inc/header.php');

	if(isset($_GET['paketId'])){
		$query = 
		'SELECT * FROM paket
		WHERE paketId = "'.$_GET["paketId"].'"';
	}
?>

<?php
$res = $mysqli->query($query);
	if($res->num_rows > 0){ ?>

		<?php $row = $res->fetch_object();?>

<div id="mainstyle" class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1><?php echo $row->name;?></h1>
			</div>
		</div> <!-- row end -->
		<div class="row">
		<div class="col-md-4">



			<img class='img-responsive' src="<?php echo $row->img_src; ?>">

			<table class="table">
 			<tbody>
 				<tr>
 					<td style="font-weight:bold;">Produktnummer:</td>
 					<td><?php echo $row->paketId;?></td>
 				</tr>
 	
 				<tr>
 					<td style="font-weight:bold;">Pris:</td>
 					<td><?php echo $row->price;?></td>
 				</tr>
 				<tr>
 					<td style="font-weight:bold;">Datum:</td>
 					<td><?php echo $row->created_at;?></td>
 				</tr>
 				<tr>
 					<td colspan="2">
 					<?php 
 					if(isset($_SESSION["admin"]) &&  $_SESSION["admin"] == true){
 						echo "<a href='delete_paket.php'>Ta bort paket</a><br>";
 						echo "<a href='edit_paket.php'>Ändra paket</a>";
 					}?>
 				</td>
 				</tr>
 				<!-- lägger till ändra och tabort om man är inloggad som admin !-->
 				
 			</tbody>
			</table>

		</div> <!-- col end -->
		<div class="col-md-8">
		<?php echo $row->description;?>
		<p><a href="#" class="btn btn-primary" role="button">Köp</a></p>
		
		</div> <!-- col end -->

	<?php } ?>

	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>