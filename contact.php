<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = $_POST['name'];
	$email = $_POST['email'];
	$message = $_POST['message'];
	$email_body = "";

	$email_body = $email_body . "Namn: " . $name . "\n";
	$email_body = $email_body . "Email: " . $email . "\n";
	$email_body = $email_body . "Meddelande: " . $message;

	header("Location: contact.php?status=sent");
	exit;
}
?>
<?php //test
$pageTitle ="Kontakta oss";
include("inc/header.php"); ?>

	<h1>Kontakt</h1>
	<?php 
	if (isset($_GET['status']) AND $_GET["status"] == "sent"){ 
	?>
			<p>Tack för ditt meddelande!</p>
	<?php
	} else {
	?>

				<form method="post" action="contact.php">
				<table>
					<tr>
						<th>
							<label for ="name">Namn</label>
						</th>
						<td>
							<input type="text" name="name" id="name">
						</td>
					</tr>
					<tr>
						<th>
							<label for ="email">Email</label>
						</th>
						<td>
							<input type="text" name="email" id="email">
						</td>
					</tr>
					<tr>
						<th>
							<label for ="message">Meddelande</label>
						</th>
						<td>
							<textarea name="message" id="message"></textarea>
						</td>
					</tr>
				</table>
				<input type="submit" value="Skicka">
				</form>
	<?php
	} 
	?>


<?php include("inc/footer.php"); ?>