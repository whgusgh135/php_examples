<?php
	session_start();

	$name = $_SESSION['name'];
	$email = $_SESSION['email'];

	print_r($_SESSION);
?>

<!DOCTYPE html>
<html>
<head>
	<title>PHP Sessions</title>
</head>
<body>
	<h1>Hello <?php echo $name; ?></h1>
</body>
</html>