<?php

	// For loop
	for($i = 0; $i < 10; $i++) {
		echo $i;
		echo '<br>';
	}

	// While loop
	$i = 0;

	while($i < 10) {
		echo $i;
		echo '<br>';
		$i++;
	}

	// Do...While
	$i = 0;
	do{
		echo $i;
		echo '<br>';
		$i++;
	} while($i < 10);

	// Foreach
	$people = ['Brad', 'Jose', 'William'];

	foreach($people as $person) {
		echo $person;
		echo '<br>';
	}

	$people = ['Brad' => 'who@gmail.com', 'Jose' => 'sss@gmail.com'];

	foreach($people as $person => $email) {
		echo $person .' '. $email;
		echo '<br>';
	}

?>