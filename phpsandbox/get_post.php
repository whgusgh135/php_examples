<?php
	// GET request info is included in url so not secure
	if(isset($_GET['name'])) {
	 $name = htmlentities($_GET['name']);
		echo $name;
	}

	// POST request info is sent through req headers
	// if(isset($_POST['name'])) {
	// 	echo htmlentities($_POST['name']);
	// }

	// REQUEST can be used for both GET and POST
	// if(isset($_REQUEST['name'])) {
	// 	echo htmlentities($_REQUEST['name']);
	// }
?>

<!DOCTYPE html>
<html>
<head>
	<title>My Website</title>
</head>
<body>
	<form method="GET" action="get_post.php">
		<div>
			<label>Name</label><br>
			<input type="text" name="name">
		</div>
		<div>
			<label>Email</label><br>
			<input type="text" name="email">
		</div>
		<input type="submit" name="Submit">

		<ul>
			<li>
				<a href="get_post.php?name=Brad">Brad</a>
			</li>
			<li>
				<a href="get_post.php?name=Steve">Steve</a>
			</li>
		</ul>
		<h1><?php echo "$name's Profile"; ?></h1>
	</form>

</body>
</html>