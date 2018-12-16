<?php 
	$name = "a b v d";

	$ex = explode(" ", $name);

	echo "<pre>";
	print_r(explode(" ",$name));
	echo "</pre>";

	echo implode("&",$ex);
	echo "<br>strlen: ".strlen($name);
	echo "<br> so tu trong chuoi la:".str_word_count($name);
	echo "<br>".str_repeat("<br>".$name,5);
	echo "<br>".str_replace($name, "hiep", $name);
	echo "<br> Ham bam du lieu".md5("123456");
	echo "<br>".sha1("123456")."<br>" .strlen(sha1("123456"));
	echo "<br>".substr($name,1,3);
	echo "<br>".strpos($name,"v");