<?php
	$user = ['name' => 'Brad', 'email' => 'test@test.com', 'age' => 35];

	// serialize is required since cookie wont accept arrays.
	$user = serialize($user);

	setcookie('user', $user, time() + (86400 * 30));

	// need to unserialize before using it
	$user = unserialize($_COOKIE['user']);

	print_r($user);

?>