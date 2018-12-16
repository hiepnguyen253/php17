<?php 
	$string ='Zenttent';
	function Kiem_tra_xem_chuoi_Palindrome($string){
		if ($string == strrev($string)) {
			return "Chuỗi ".$string." là chuỗi Palindrome";
		}else{
			return "Chuỗi ".$string." không phải là chuỗi Palindrome";
		}
	}
	echo Kiem_tra_xem_chuoi_Palindrome($string)."<br>";
 ?>