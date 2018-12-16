<?php 
	$info = array();
	$info['name'] = 'Nguyen Hoang Hiep';
	$info['address'] = 'Hung Yen';
	$info['mobile'] = '01632154750';
	$info['gender'] = 'nam';
	$info['class'] = 'php17';


	echo "<br> Thong tin sinh vien";
	echo "<br> Ho ten:".$info['name'];
	echo "<br> Que Quan:".$info['address'];
	echo "<br> Mobile:".$info['mobile'];
	echo "<br> gende:".$info['gender'];
	echo "<br> class:".$info['class'];

	$point =  array();
	$point['Toan'] = array(10,9);
	$point['Ly'] = array(10,9);
	$point['Hoa'] = array(10,9);

	$info['point'] = $point;
	echo "<pre>";
	print_r($info);
	echo"</pre>";
	echo "<br> Diem toan " . $info['point']['Toan'][0];
	
	$row1 = array(1,2,3,4);
	$row2 = array(5,6,7,8);
	$data = array($row1,$row2);

	echo "<pre>";
		print_r($data);
	echo "</pre>";
	for ($i=0; $i < count($data) ; $i++) { 
		for ($j=0; $j < count($data[$i]) ; $j++) { 
			echo $data[$i][$j]. "\;&nbsp;&nbsp;";
		}
		echo "<br><br>";
	}
 ?>