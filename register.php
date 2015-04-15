<?php
$pageTitle = "Registrera dig";
include ('inc/header.php');
?>

<?php

if(isset($_POST['username']))
	{ 
		$query ='INSERT INTO users(username,password,email,firstName,lastName)
				VALUES ("$_POST[username]",
						"$_POST[password]",
						"$_POST[email]",
						"$_POST[firstName]",
						"$_POST[lastName]")'; 

			
	$mysqli->query($query);
		 
	header('Location:index.php');
	
	}		
?>


<form role="form" method="post" action="register.php">
<input type="text" name="username" id="username" placeholder="användarnamn">
<input type="password" name="password" id="password" placeholder="lösenord">
<input type="text" name="email" id="email" placeholder="email">
<input type="text" name="firstName" id="firstName" placeholder="förnamn">
<input type="text" name="lastName" id="lastName" placeholder="efternamn">
<input type="submit" Value="Registrera dig">
</form>

<?php
include('inc/footer.php');
?>