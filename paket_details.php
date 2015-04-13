<?php
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
	</div> <!-- row end -->
</div> <!-- container end -->