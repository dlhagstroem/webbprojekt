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
	

<?php 
if($res->num_rows > 0)
{
	while($row = $res->fetch_object())
	{ ?>
<div class="row">
	<div class="col-md-3">
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
		<img class='img-responsive' src="<?php echo $row->img_src; ?>">
	</div> <!-- col end -->
	<div class="col-md-3">
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
		<img class='img-responsive' src="<?php echo $row->img_src; ?>">
	</div> <!-- col end -->
	<div class="col-md-3">
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
		<img class='img-responsive' src="<?php echo $row->img_src; ?>">
	</div> <!-- col end -->
	<?php } ?>
<?php } ?>

</div> <!-- container end -->

<?php include("inc/footer.php"); ?>