<?php 

$arr = array(1,4,2,6,9,100,45,8,20);

for ($i=0; $i < count($arr) ; $i++) { 
	$max = $i;
	$temp = $arr[$i];
	for ($j=($i + 1); $j < count($arr) ; $j++) { 
		if ($temp > $arr[$j]) {
			$temp = $arr[$j];
			$max = $j;
		}
	}
	$arr[$max] = $arr[$i];
	$arr[$i] = $temp;
	
}
echo "Phần tử lớn nhất trong mảng là: ";
echo "<pre>";
print_r($arr[$max]);
echo "</pre>";

?>