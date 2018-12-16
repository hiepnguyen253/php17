<?php
function chuan_hoa($str)
{
	trim(" ",$str);
	return mb_convert_case($str, MB_CASE_TITLE, "UTF-8");
}	
$str=" nguYễn HoàNg hiỆp ";
$str = chuan_hoa($str);
echo $str;
?>