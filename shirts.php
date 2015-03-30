<?php 
$pageTitle ="T-shirtar";
include("inc/header.php"); ?>

<?php $query = 'SELECT * FROM tshirt 
				ORDER BY created_at DESC' ?>
<?php $res = $mysqli->query($query); ?>

		<h1>Våra T-shirtar</h1>
<?php 
if($res->num_rows > 0)
{
	while($row = $res->fetch_object())
	{ ?>
		<h2><?php echo $row->name; ?></h2>
		<p><?php echo $row->description; ?></p>
		<p><?php echo $row->price; ?> kr</p>
		<img src="<?php echo $row->img_src; ?>">
	<?php } ?>
<?php } ?>


<?php include("inc/footer.php"); ?>