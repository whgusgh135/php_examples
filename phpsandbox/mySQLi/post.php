<?php
	require('config/config.php');
	require('config/db.php');

	// Check for submit
	if(isset($_POST['delete'])) {
		// Get form data
		$delete_id = mysqli_real_escape_string($connection, $_POST['delete_id']);

		$query = "DELETE FROM posts WHERE id = {$delete_id}";

		if(mysqli_query($connection, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '.mysqli_error($connection);
		}
	}

	// get ID from query
	$id = mysqli_real_escape_string($connection, $_GET['id']);

	$query = 'SELECT * FROM posts WHERE id= '.$id;

	// Get Result
	$result = mysqli_query($connection, $query);

	// Fetch Data
	$post = mysqli_fetch_assoc($result);
	// var_dump($posts);

	// Free Result
	mysqli_free_result($result);

	// Close Connection
	mysqli_close($connection);

?>


<?php include('inc/header.php'); ?>
	<a href="<?php echo ROOT_URL; ?>" class="btn btn-default">Back</a>
	<h1><?php echo $post['title']; ?></h1>
	<small>Created on <?php echo $post['created_at']; ?> by <?php echo $post['author']; ?></small>
	<p><?php echo $post['body']; ?></p>
	<hr>
	<form class="pull-right" method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
		<input type="hidden" name="delete_id" value="<?php echo $post['id']; ?>">
		<input type="submit" name="delete" value="Delete" class="btn btn-danger">
	</form>

	<a href="<?php echo ROOT_URL; ?>editpost.php?id=<?php echo $post['id']; ?>">Edit</a>
<?php include('inc/footer.php'); ?>