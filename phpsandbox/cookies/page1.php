<?php
	if(isset($_POST['submit'])) {
		$username = htmlentities($_POST['username']);

		setcookie('username', $username, time()+3600);

		header('Loaction: page2.php');
	}

?>



<!DOCTYPE html>
<html>
<head>
	<title>PHP Cookies</title>
</head>
<body>
	<form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="text" name="username" placeholder="Enter name">
		<br>
		<input type="submit" name="submit" value="Submit">
	</form>
</body>
</html>