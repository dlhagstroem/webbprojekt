<?php 
$pageTitle ="Våra stödpaket";
include("inc/header.php"); ?>

<?php $query = 'SELECT * FROM paket 
				ORDER BY created_at DESC'; ?>
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

	<div class="col-xs-6 col-md-3">
		<div class="thumbnail">
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
	
		<img class='img-responsive' src="<?php echo $row->img_src; ?>">
		<a href="paket_details.php?paketId=<?php echo $row->paketId?>">Läs mer</a><br>
		</div>
	</div>
	
	<?php } ?>
<?php } ?>

	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>