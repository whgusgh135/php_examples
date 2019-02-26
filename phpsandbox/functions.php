<?php

	function simpleFunc() {
		echo 'Hello World <br>';
	}

	simpleFunc();

	function sayHello($name = 'World') {
		echo "Hello $name <br>";
	}

	sayHello('Joe');
	sayHello();

	function addNumbers($num1, $num2) {
		return $num1 + $num2;
	}

	echo addNumbers(2, 3);

	// pass by reference
	function addTen($num) {
		$num += 10;
	}
	function addTenRef(&$num) {
		$num += 10;
	}
	$myNum = 0;

	addTen($myNum);
	echo $myNum;
	addTenRef($myNum);
	echo $myNum;

?>