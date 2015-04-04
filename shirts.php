<?php 
$pageTitle ="T-shirtar";
include("inc/header.php"); ?>

<?php $query = 'SELECT * FROM tshirt 
				ORDER BY created_at DESC' ?>
<?php $res = $mysqli->query($query); ?>

	<div class="container">
		<div class="row">
			<div class="col-lg-12">
				<h1>Våra T-shirtar</h1>
			</div>
		</div> <!-- row end -->
		<div class="row">

<?php 
if($res->num_rows > 0)
{
	while($row = $res->fetch_object())
	{ ?>
	<div class="col-xs-6 col-md-3">
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
		<a href="#" class="thumbnail">
		<img class='img-responsive' src="<?php echo $row->img_src; ?>">
		</a>
	</div> <!-- col end -->
	<div class="col-xs-6 col-md-3">
		<h2>title</h2>
		<p>desc</p>
		<p>0 kr</p>
		<a href="#" class="thumbnail">
		<img class='img-responsive' src="">
		</a>
	</div> <!-- col end -->
	<div class="col-xs-6 col-md-3">
		<h2>title</h2>
		<p>desc</p>
		<p>0 kr</p>
		<a href="#" class="thumbnail">
		<img class='img-responsive' src="">
		</a>
	</div> <!-- col end -->
	<div class="col-xs-6 col-md-3">
		<h2>title</h2>
		<p>desc</p>
		<p>0 kr</p>
		<a href="#" class="thumbnail">
		<img class='img-responsive' src="">
		</a>
	</div> <!-- col end -->
	<?php } ?>
<?php } ?>
	</div> <!-- row end -->
</div> <!-- container end -->

<?php include("inc/footer.php"); ?>