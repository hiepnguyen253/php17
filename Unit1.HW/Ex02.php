<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php 
	$kq='';
	if($_POST['tinh'])
	{
		$a = ($_POST['a']) ? (float)trim($_POST['a']) : '';
		$b = ($_POST['b']) ? (float)trim($_POST['b']) : '';
		$c = ($_POST['c']) ? (float)trim($_POST['c']) : '';
		$delta = ($b*$b) - (4*$a*$c);
		if($delta < 0){
			$kq = 'Phương trình vô nghiệm';
		}elseif ($a == 0) {
			$kq = -($c/$b);
		}
		 elseif ($delta == 0) {
			$kq = 'Phương trình có nghiệm kép x1 = x2 = ' . (-$b/2*$a);
		}else{
			$kq = 'Phương trình có 2 nghiệp phân biệt x1= ' . ((-$b + sqrt($delta))/2*$a);
			$kq .= ',x2 = ' . ((-$b - sqrt($delta))/2*$a);
		}

	}

	?>
	<form method="post" action="">
		<input type="text" style="width: 30px" name="a" value=""/>x <sup>2</sup>
		+
		<input type="text" style="width: 30px" name="b" value=""/>x
		+ 
		<input type="text" style="width: 30px" name="c" value=""/>
		= 0
		<br/><br/>
		<input type="submit" name="tinh" value="Tính" />
	</form>
	<?php 
	echo $kq;

	 ?>
	
</body>
</html>