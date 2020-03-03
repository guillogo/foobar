<?php
	
	$printLine = "";
	$printNumber = "";

	foreach (range(1,100) as $number) {
		
		if ($number % 3 == 0 && $number %5 == 0) {
			$printNumber = "foobar, ";
		} elseif ($number % 3 == 0)  {
			$printNumber = "foo, ";
		} elseif ($number % 5 == 0) {
			$printNumber = "bar, ";
		}
		else {
			$printNumber = $number.", ";
		}		
		$printLine = $printLine . $printNumber;		
	}
	
	echo substr($printLine,0,-2);

?>