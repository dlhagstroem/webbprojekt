<?php
if ($_SERVER["REQUEST_METHOD"] == "POST"){
	$name = trim($_POST['name']);
	$email = trim($_POST['email']);
	$message = trim($_POST['message']);

	//validerar. säkerhet.
	if($name == "" OR $email == "" OR $message == ""){
		echo "Du måste fylla i alla fält";
		exit;
	}
	foreach($_POST as $value){
		if (stripos($value, 'Content-Type:') !== FALSE){
			echo "Problem med den information du angett.";
			exit;
		}
	}
	//för att kolla om robotspammare fyller i det
	if ($_POST['address'] !==""){
		echo "Error.";
		exit;
	}
	//importerat separat mailklass
	require_once("inc/phpmailer/class.phpmailer.php");
	$mail = new PHPMailer();

	if(!$mail->ValidateAddress($email)){
		echo "Du måste ange en korrekt mailadress.";
	}

	$email_body = "";
	$email_body = $email_body . "Namn: " . $name . "<br>";
	$email_body = $email_body . "Email: " . $email . "<br>";
	$email_body = $email_body . "Meddelande: " . $message;

	$mail->SetFrom($email, $name);
	$address = "linans12@student.hh.se";
	$mail->AddAddress($address, "Coola T-shirtar");
	$mail->Subject = "Coola T-shirtar kontakt | " . $name;
	$mail->MsgHTML($email_body);

	if(!$mail->Send()){
		echo "Det uppstod problem med att skicka mailet:" . $mail->ErrorInfo;
		exit;
	}


	header("Location: contact.php?status=sent");
	exit;
}
?>
<?php //test
$pageTitle ="Kontakta oss";
include("inc/header.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-12">

	<h1>Kontakt</h1>
	<?php 
	if (isset($_GET['status']) AND $_GET["status"] == "sent"){ ?>
			<p>Tack för ditt meddelande!</p>
	</div>
	<div class="col-md-12">
	<?php
	} else { ?>

				<form role="form" method="post" action="contact.php">
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
					<!-- fält som inte syns. för att kolla om robotspammare fyller i det -->
					<tr style="display: none;">
						<th>
							<label for ="address">Address</label>
						</th>
						<td>
							<input type="text" name="address" id="address">
							<p>Om du ser detta, var god lämna fältet blankt.</p>
						</td>
					</tr>
				</table>
				<input type="submit" value="Skicka">
				</form>
	<?php
	} 
	?>
		</div>
	</div>
	<div class="row">
		<div class="col-md-12">
<?php include("inc/footer.php"); ?>
		</div>
	</div>
</div>