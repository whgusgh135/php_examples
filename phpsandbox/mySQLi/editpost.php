<?php
	require('config/config.php');
	require('config/db.php');

	// Check for submit
	if(isset($_POST['submit'])) {
		// Get form data
		$update_id = mysqli_real_escape_string($connection, $_POST['update_id']);
		$title = mysqli_real_escape_string($connection, $_POST['title']);
		$body = mysqli_real_escape_string($connection, $_POST['body']);
		$author = mysqli_real_escape_string($connection, $_POST['author']);

		$query = "UPDATE posts SET 
			title='$title',
			author='$author',
			body='$body'
			WHERE id = {$update_id}
			";

		if(mysqli_query($connection, $query)) {
			header('Location: '.ROOT_URL.'');
		} else {
			echo 'ERROR: '.mysqli_error($connection);
		}
	}

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
	<h1>Add Post</h1>
	<form method="POST" action="<?php $_SERVER['PHP_SELF']; ?>">
		<div class="form-group">
			<label>Title</label>
			<input type="text" name="title" class="form-control" value="<?php echo $post['title']; ?>">
		</div>
		<div class="form-group">
			<label>Author</label>
			<input type="text" name="author" class="form-control" value="<?php echo $post['author']; ?>">
		</div>
		<div class="form-group">
			<label>Body</label>
			<textarea name="body" class="form-control"><?php echo $post['body']; ?></textarea>
		</div>
		<input type="hidden" name="update_id" value="<?php echo $post['id']; ?>">
		<input type="submit" name="submit" value="Submit" class="btn btn-primary">
	</form>
<?php include('inc/footer.php'); ?>