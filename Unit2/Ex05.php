<?php 
function Kiem_tra_so_chan_le($number){
	return($number%2==0)?true:false;
}
echo "so 10 la so: " . ((Kiem_tra_so_chan_le(10)?"chan":"le"));

function Kiem_tra_so_chan_le_1($number){
	return($number%2==0)?"chan":"le";
}
echo " <br> So 11 la so " . Kiem_tra_so_chan_le_1(11);
?>


