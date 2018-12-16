<?php 
	for ($i = 1; $i <=8; $i++) {
		for ($j = 8; $j >=1 ; $j--) {
			if ($j>=$i) {
				echo "&nbsp&nbsp&nbsp";
				
			}else {
				echo "#&nbsp";
			}
		}
		echo "<br>";
	}
 ?>