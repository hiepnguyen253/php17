


<?php
// vidu1
	$info = array();
	$info['name'] = 'Nguyen Hoang Hiep';
	$info['address'] = 'Hung Yen';
	$info['mobile'] = '01632154750';
	$info['gender'] = 'nam';
	$info['class'] = 'php17';

    var_dump(in_array('Hậu' , $info));
    // Kết quả là false

    var_dump(in_array('Zent' , $info));
    // Kết quả là false

    echo "<br>Số lượng phần tử trong mảng:" . count($info);
?>

