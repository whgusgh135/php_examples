<?php
	$path = '/dir0/dir1/myfile.php';
	$file = 'file1.txt';

	// Return filename
	// echo basename($path);

	// Return filename without ext
	// echo basename($path, '.php');

	// Return the dir name from path
	// echo dirname($path);

	// Get abs path
	// echo realpath($file);

	// Check if file exists
	// echo file_exists($file);

	// Check to see if file(or folder) exists
	// echo is_file($file);

	// Check if writeable
	// echo is_writable($file);

	// Check if readable
	// echo is_readable($file);

	// Get file size
	// echo filesize($file);

	// Create a directory
	// mkdir('testing');

	// Delete a directory if empty
	// rmdir('testing');

	// Copy file
	// echo copy('file1.txt', 'file2.txt');

	// Rename a file
	// rename('file2.txt', 'myfile.txt');

	// Delete a file
	// unlink('myfile.txt');

	// Write from file to string
	// echo file_get_contents($file);

	// Write string to file
	// echo file_put_contents($file, 'Goodbye World');
	// $current = file_get_contents($file);
	// $current .= ' Goodbye World';
	// file_put_contents($file, $current);

	// Open File For Reading
	// $handle = fopen($file, 'r');
	// $data = fread($handle, filesize($file));
	// echo $data;
	// fclose($handle);

	// Open File For Writing
	$handle = fopen($file, 'w');
	$txt = 'John Doe';
	fwrite($handle, $txt);
	fclose($handle);

?>