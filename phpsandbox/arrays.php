<?php

	/*
	ARRAYS - Variable that holds multiple values
	- Indexed
	- Associative
	- Multi-dimensional
	*/

	$people = array('Kevin', 'Jeremy', 'Sara');
	$ids = array(23, 55, 12);
	$cars = ['Honda', 'Toyota', 'Ford'];
	$cars[3] = 'Chevy';
	$cars[] = 'BMW';
	echo count($cars);


	print_r($cars);
	var_dump($cars);


	/*
	ASSOCIATIVE ARRAYS
	*/

	$people = ['Brad' => 35, 'Jose' => 32, 'William' => 37];
	$ids = [22 => 'Brad', 44 => 'Jose', 63 => 'William'];

	echo $people['Brad'];
	var_dump($ids);

	/*
	MULTIDIMENSIONAL ARRAYS
	*/

	$cars = array(
		array('Honda', 20, 10),
		array('Toyoto', 30, 20)
	);

	echo $cars[1][2];
?>