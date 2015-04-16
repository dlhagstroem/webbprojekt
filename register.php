<?php
$pageTitle = "Registrera dig";
include ('inc/header.php');
?>

<?php

if(isset($_POST['username']))
	{ 
	  try { 
      $query = "INSERT INTO users(username, password, email, firstName, lastName)
				VALUES ('" .$_POST['username'] . "',
						'" . $_POST['password'] ."',
						'" . $_POST['email'] . "',
						'" . $_POST['firstName'] . "',
						'" . $_POST['lastName'] . "')"; 
   		
   		$mysqli->query($query);
   		header('Location:index.php');
   } 
   catch (mysqli_sql_exception $e) { 
      die($e); 
   }
	
	}		
?>
<div class="container">
	<div class="row">
		<div class="col-md-6 col-md-offset-3">
			<h1 class="text-center" style="padding-bottom: 0.7em;">Registrering</h1>
			<form role="form" method="post" action="register.php"> 
				<div class="form-group">
					<input class="form-control" type="text" name="username" id="username" placeholder="användarnamn">
				</div>
				<div class="form-group">
					<input class="form-control" type="password" name="password" id="password" placeholder="lösenord">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="email" id="email" placeholder="email">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="firstName" id="firstName" placeholder="förnamn">
				</div>
				<div class="form-group">
					<input class="form-control" type="text" name="lastName" id="lastName" placeholder="efternamn">
				</div>
				<div class="form-group">
					<input class="form-control" type="submit" Value="Registrera dig">
				
				</div>
			</form>
		</div>
	</div>
</div>
<?php
include('inc/footer.php');
?>