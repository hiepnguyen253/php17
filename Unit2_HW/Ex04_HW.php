<?php 
	$n = 9;
	$s = 0;
	$giaithua = 1;

	for ($i=1; $i <= $n ; $i++) { 
		$giaithua *= $i;
		$s += ($i/$giaithua);
	}
	echo 'Tổng của dãy số là: ' . $s;
 ?>