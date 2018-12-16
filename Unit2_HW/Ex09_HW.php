<?php 
	$s = 0;
	for ($i=1; $i <= 20 ; $i++) { 
		if ($i%2==0) {
			$s += $i;
		}
	}
	echo "Tổng của 10 số chẵn đầu tiên là: " . $s;
 ?>