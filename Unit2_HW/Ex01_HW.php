<?php 
$arr = array(1,4,2,6,9,100,5);
for ($i=0; $i <count($arr) ; $i++) { 
	$min = $i;
	$temp = $arr[$i];
	for ($j=($i + 1); $j < count($arr) ; $j++) { 
		if ($temp > $arr[$j]) {
			$temp = $arr[$j];
			$min = $j;
		}
	}
	$arr[$min] = $arr[$i];
	$arr[$i] = $temp;
	
	echo "<pre>";
	print_r($arr[$i]);
	echo "</pre>";
}

?>