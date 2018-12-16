<?php 
$info = "Nguyễn Hoàng Hiệp";
$name = explode(" ", $info);
$result = count($name) - 1;
$ho = $name['0'];
$ten = $name[$result];
$dem = str_replace($name[$result],"",str_replace($name['0'],"",$info));
echo "Họ: ".$ho."<br>";
echo "Đệm: ".$dem."<br>";
echo "Tên: ".$ten."<br>";

?>