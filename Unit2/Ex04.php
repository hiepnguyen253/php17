<?php 
	$info = array();
	$info['name'] = 'Nguyen Hoang Hiep';
	$info['address'] = 'Hung Yen';
	$info['mobile'] = '01632154750';
	$info['gender'] = 'nam';
	$info['class'] = 'php17';

	foreach ($info as $key => $value) {
		echo "<br> Key: " . $key;
		echo "<br> Value: " . $value;
		echo "<br>";
	}
	foreach ($info as $key) {
		echo "<br>" . $key;
		echo "<br>";
	}

 ?>