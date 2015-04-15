<?php
$pageTitle ="Paketdetaljer";
include('inc/header.php');
/*
if(isset($_GET['id']))
{
	$query = 
	'SELECT * FROM paket
	WHERE id = "{$_GET['id']}"'
};*/?>

<div id="mainstyle" class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Title produkt #1</h1>
			</div>
		</div> <!-- row end -->
		<div class="row">
		<div class="col-md-4">
			<img class='img-responsive' src="http://placehold.it/450x400">

			<table class="table">
 			<tbody>
 				<tr>
 					<td style="font-weight:bold;">Produktnummer:</td>
 					<td>#1</td>
 				</tr>
 				<tr>
 					<td style="font-weight:bold;">Produktnamn:</td>
 					<td>Utbildningspaket</td>
 				</tr>
 				<tr>
 					<td style="font-weight:bold;">Pris:</td>
 					<td>1 kr</td>
 				</tr>
 				<tr>
 					<td style="font-weight:bold;">Datum:</td>
 					<td>#####</td>
 				</tr>
 				<?php if($_SESSION["admin"] == true){
 					echo "<a href='delete_paket.php'>Ta bort paket</a><br>";
 					echo "<a href='edit_paket.php'>Ändra paket</a>";
 				}?>
 			</tbody>
			</table>
<?php /*
$res = $mysqli->query($query);
if($res->num_rows > 0)
	{ ?>

		<?php $row = $res->fetch_object();?>
		<img class='img-responsive' src="<?php echo $row->img_src; ?>"> <!--större bild?-->
		<p>Produktnummer: <?php echo {$row->id}?></p><br>
		<h2>Namn: <?php echo {$row->name}?></h2><br>
		<h3>Pris: <?php echo {$row->price}?></h3><br>
		<p>Beskrivning: <?php echo {$row->description}?></p><br>
		<p>Datum: <?php echo {$row->created_at}</p>?>


	<?php } */?>

		</div> <!-- col end -->
		<div class="col-md-8">
		beskrivning... Sed ut perspiciatis unde omnis iste natus error sit voluptatem 
		accusantium doloremque laudantium, totam rem aperiam, eaque ipsa quae ab illo 
		inventore veritatis et quasi architecto beatae vitae dicta sunt explicabo. 
		Nemo enim ipsam voluptatem quia voluptas sit aspernatur aut odit aut fugit, 
		sed quia consequuntur magni dolores eos qui ratione voluptatem sequi nesciunt. 
		Neque porro quisquam est, qui dolorem ipsum quia dolor sit amet, consectetur, 
		adipisci velit, sed quia non numquam eius modi tempora incidunt ut labore et 
		dolore magnam aliquam quaerat voluptatem. Ut enim ad minima veniam, quis 
		nostrum exercitationem ullam corporis suscipit laboriosam, nisi ut aliquid ex 
		ea commodi consequatur? Quis autem vel eum iure reprehenderit qui in ea 
		voluptate velit esse quam nihil molestiae consequatur, vel illum qui dolorem 
		eum fugiat quo voluptas nulla pariatur?
		<p><a href="#" class="btn btn-primary" role="button">Köp</a></p>
		</div> <!-- col end -->
	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>