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
$pageTitle ="Kontakt";
include("inc/header.php"); ?>

<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">

	<h1 class="text-center" style="padding-bottom: 0.7em;">Kontakt</h1>
	<?php 
	if (isset($_GET['status']) AND $_GET["status"] == "sent"){ ?>
			<p>Tack för ditt meddelande!</p>
	</div>
	
	<?php
	} else { ?>

				<form role="form" method="post" action="contact.php">
					<div class="form-group">
				
									<label for ="name">Namn</label>
									<input class="form-control" type="text" name="name" id="name">
								
									<label for ="email">Email</label>
									<input class="form-control" type="text" name="email" id="email">
								
									<label for ="message">Meddelande</label>
									<textarea class="form-control" name="message" id="message"></textarea>
							
							<!-- fält som inte syns. för att kolla om robotspammare fyller i det -->
								<table>
								<tr style="display: none;">
								<th>
								<label for ="address">Address</label>
								</th>
								<td>
								<input type="text" name="address" id="address">
								<p>Om du ser detta, var god lämna fält blankt.</p>
								</td>
								</tr>
								<table>
						
									<br><input class="form-control" type="submit" value="Skicka">
					</div>
				</form>
	<?php
	} 
	?>
		</div>

	<div class="row">
		<div class="col-md-12">
<?php include("inc/footer.php"); ?>
		</div>
	</div>
</div>