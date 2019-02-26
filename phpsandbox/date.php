<?php

	//echo date('d')	Day
	//echo date('m')	Month
	//echo date('y')	Year
	//echo date('l')	Day of the week

	//echo date('h')	Hour
	//echo date('i')	Min
	//echo date('s')	Sec
	//echo date('a')	AM or PM

	// Set Time Zone
	date_default_timezone_set('America/New_York');

	// Unix timestamp - integer containing no. of sec from Unix Epoch (Jan 1 1970 00:00:00 GMT) and the time specified

	$timestamp = mktime(10, 14, 54, 9, 10, 1981);

	echo $timestamp;

?>