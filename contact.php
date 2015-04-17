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

<div id="mainstyle" class="container">
	<div class="row">
		<div class="col-lg-12">
		<h1>Kontakta oss? <small>Fyll i formuläret nedan!</small></h1>
				<?php 
				if (isset($_GET['status']) AND $_GET["status"] == "sent"){ ?>
						<div class='alert alert-success' role='alert'>Tack för ditt meddelande!</div>

			<?php } 
				else { ?>
		</div>
	</div>
	<div class="row" style="padding-top: 0.7em;">
		<div class="col-md-8">

			<form class="form-horizontal"  role="form" method="post" action="contact.php">
				<div class="form-group">
			    	<label for ="name" class="col-sm-2 control-label">Ditt Namn:</label>
			    	<div class="col-sm-10">
			      		<input class="form-control" type="text" name="name" id="name" placeholder="Fyll i ditt namn">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for ="email" class="col-sm-2 control-label">Din Epost</label>
			    	<div class="col-sm-10">
			    		<input class="form-control" type="text" name="email" id="email" placeholder="Fyll i din e-post">
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for ="message" class="col-sm-2 control-label">Meddelande</label>
			    	<div class="col-sm-10">
			    		<textarea class="form-control" name="message" id="message" placeholder="Ditt meddelande här"></textarea>
			    	</div>
			  	</div>
			  	<div class="form-group">
			    	<label for ="message" class="col-sm-2 control-label">Human?</label>
			    	<div class="col-sm-10">
			    		<!-- fält som inte syns. för att kolla om robotspammare fyller i det -->
						<table><thead><tr style="display: none;">
								<td><label for ="address">Address</label></td>
						</tr></thead><tbody><tr>
								<td><input type="text" name="address" id="address">
								<p style="font-style: italic; font-size:11px;">Lämna då denna ruta blank</p>
						</tr></tbody></table>
						<button type="submit" class="btn btn-default">Submit</button>
			    	</div>
			  	</div>
			</form>				
				
		</div> <!-- col end -->
		<div class="col-md-4">
			
					
		</div> <!-- col end -->
	</div> <!-- row end -->
</div> <!-- container end -->
	<?php }; ?>

<?php include("inc/footer.php"); ?>
