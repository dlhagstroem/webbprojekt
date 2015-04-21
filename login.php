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
		echo "<div class='alert alert-danger' role='alert'>Fel användarnamn eller lösenord.</div>";
		}
}
?>

<div id="mainstyle" class="container" style="width:30%">
	<div class="row center-block">
		<div class="col-lg-12 center-block">
			<h1 class="text-center">Logga in</h1>
			
			<form action="login.php" method="post">
			<div class="form-group">
			<input type="text" name="username" class="form-control" placeholder="Användarnamn">
			</div>
  			<div class="form-group">
			<input type="password" name ="password" class="form-control" placeholder="Lösenord">
			</div>
			<button type="submit" class="btn btn-default center-block">Logga in</button>
			</form>
		</div>
	</div> <!-- row end -->
</div> <!-- container end -->
<?php include('inc/footer.php'); ?>