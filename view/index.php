<?php 
session_start();

	include("connection.php");
	include("functions.php");

	$user_data = check_login($con);

?>

<!DOCTYPE html>
<html>
<head>
	<title>Accueil</title>
</head>
<body>

	<a href="logout.php">Logout</a>
	<h1>Accueil</h1>

	<br>
	Bounjours Mr, <?php echo $user_data['user_name']; ?>
</body>
</html>