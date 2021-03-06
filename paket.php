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
		<a class="thumbnail" href="paket_details.php?paketId=<?php echo $row->paketId; ?>">
		
			<img class='img-responsive' src="<?php echo $row->img_src; ?>">
				<blockquote style="border:0px;">
				<p style="min-height:200px;"><?php echo $row->orginfo; ?></p>
				<p><?php echo $row->included; ?></p>
				</blockquote>
			<h4 class="text-center"><?php echo $row->price; ?> kr</h4>
		
		</a>
	</div>
	
	<?php } ?>
<?php } ?>

	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>