<?php
	session_start();
	if(isset($_POST["firstName"])) {
		$_SESSION["firstName"] = $_POST["firstName"];
	}
	if(isset($_POST["lastName"])) {
		$_SESSION["lastName"] = $_POST["lastName"];
	}
	if(isset($_POST["username"])) {
		$_SESSION["username"] = $_POST["username"];
	}
	if(isset($_POST["email"])) {
		$_SESSION["email"] = $_POST["email"];
	}
	if(isset($_POST["address"])) {
		$_SESSION["address"] = $_POST["address"];
	}
	if(isset($_POST["address2"])) {
		$_SESSION["address2"] = $_POST["address2"];
	}
	if(isset($_POST["state"])) {
		$_SESSION["state"] = $_POST["state"];
	}
	if(isset($_POST["zip"])) {
		$_SESSION["zip"] = $_POST["zip"];
	}
?>
<!DOCTYPE HTML>
<html lang="en">
<head>
	<meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, shrink-to-fit=no">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/4.0.0/css/bootstrap.min.css">
	<title>Dashboard with Storage</title>
</head>

<body class="bg-light">

	<div class="container">
		<div class="pt-5 pb-3 text-center">
			<h2>Confirmation</h2>
			<p class="lead"></p>
		</div>

		<div class="row">
			<div class="col-12">
				<h4 class="mb-3">Changes Have Been Saved</h4>

				Click <a href="dashboard.php">here to go back</a> to Dashboard.
				
			</div>
		</div>

		<footer class="my-5 text-muted text-center text-small">
			<p class="mb-1">&copy; 2019 ITP Web Dev</p>
		</footer>

	</div>
	
</body>
</html>