<?php 
$pageTitle ="T-shirtar";
include("inc/header.php"); ?>

<?php $query = 'SELECT * FROM products 
				ORDER BY created_at DESC' ?>
<?php $res = $mysqli->query($query); ?>

	<div id="mainstyle" class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Våra stödpaket</h1>
			</div>
		</div> <!-- row end -->
		<div class="row">

<?php 
if($res->num_rows > 0)
{
	while($row = $res->fetch_object())
	{ ?>

	<!---
	<div class="col-xs-6 col-md-3">
		<div class="thumbnail">
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
	
		<img class='img-responsive' src="<?php echo $row->img_src; ?>">
		</div>
	</div> col end // Utkommenterad till databasen är i funktion! -->
	
	<?php } ?>
<?php } ?>

		<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
			<h2>Title</h2>
			<p>beskrivning</p>
			<p>pris (0kr)</p>
		
			<img class='img-responsive' src="http://placehold.it/200x200">
			</div>
		</div> <!-- col end -->
		<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
			<h2>Title</h2>
			<p>beskrivning</p>
			<p>pris (0kr)</p>
		
			<img class='img-responsive' src="http://placehold.it/200x200">
			</div>
		</div> <!-- col end -->
		<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
			<h2>Title</h2>
			<p>beskrivning</p>
			<p>pris (0kr)</p>
		
			<img class='img-responsive' src="http://placehold.it/200x200">
			</div>
		</div> <!-- col end -->
		<div class="col-xs-6 col-md-3">
			<div class="thumbnail">
			<h2>Title</h2>
			<p>beskrivning</p>
			<p>pris (0kr)</p>
		
			<img class='img-responsive' src="http://placehold.it/200x200">
			</div>
		</div> <!-- col end -->

	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>