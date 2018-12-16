<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Document</title>
</head>
<body>
	<?php
	$kq='';
	if ($_POST['tinh'])
	{
		$a = ($_POST['a']) ? (float)trim($_POST['a']) : '';
		$b = ($_POST['b']) ? (float)trim($_POST['b']) : '';
		if ($a==0) {
			$kq = "Vô nghiệm";
		}
		elseif ($b==0) {
			$kq = 0;
		}
		else {
			$kq = -($b) / $a ;
		}
	}  
	?>
	<form action="" method="post">
		<input type="text" style="width: 30px;" value="" name="a">x + <input type="text" style="width: 30px;" value="" name="b">=0 <br> <br>
		<input type="submit" value="Tính" name="tinh">
	</form>
	<?php echo 'x= ' . $kq; ?>
	
</body>
</html>