<?php
$pageTitle = "Logga in";
include ('inc/header.php');
?>

<?php 
if(isset($_POST['username'])){
	$query = 	'SELECT username, password, userId, admin FROM users 
				WHERE username = "'.$_POST["username"].'"
				AND password = "'.$_POST["password"].'"';
				


	$res = $mysqli->query($query);

	if($res->num_rows > 0){
		
		$row = $res->fetch_object();
		$_SESSION["username"] = $row->username;
		$_SESSION["userId"] = $row->userId;
		$_SESSION["admin"] = $row->admin;

		header("Location:index.php");
		}

		else 
		{
		echo "Fel användarnamn eller lösenord.";
		}
}
?>


<form action="login.php" method="post">
<input type="text" name="username" placeholder="username">
<input type="password" name ="password" placeholder="password">
<input type="submit" value="Logga in">
</form>

<?php
include('inc/footer.php');
?>