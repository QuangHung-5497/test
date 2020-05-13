<!DOCTYPE html>
<html lang="en">
<head>
	<meta charset="UTF-8">
	<title>Bài 1</title>
</head>
<body>
	<form method="post" action="#">
		Hệ số a: 
		<input type="text" name="a"><br>
		Hệ số b: 
		<input type="text" name="b"><br>
		Hệ số c: 
		<input type="text" name="c"><br>
		<input type="submit" name="ketqua" value="Kết quả">
	</form>
	<?php 
	    function validate($a, $b, $c){
	    	if (is_numeric($a)&&is_numeric($b)&&is_numeric($c)) {
	    		return true;
	    	}else{
	    		return false;
	    	}
	    }
	    function giaiPT($a, $b, $c){
	    	if ($a==0 && $b==0) {
	    		echo "Phương trình vô nghiệm do a = b = 0";
	    	}elseif($a==0 && $b!=0){
	    		echo "Phương trình có dạng: ".($b)."x + ".($c)." = 0 <br>";
				echo "Nghiệm của phương trình là: x = ".(-$c / $b)." .";
	    	}else{
	    		$delta = $b*$b - 4*$a*$c;
	    		if ($delta < 0) {
	    			echo "Phương trình vô nghiệm";
	    		}elseif ($delta == 0) {
	    			echo "Phương trình có dạng: ".($a)."x^2 + ".($b)."x + ".($c)." = 0 <br>";
	    			echo "Phương trình có nghiệm kép x1 = x2 = ".(-$b / (2*$a));
	    		}else{
	    			echo "Phương trình có dạng ".$a."x^2 + ".($b)."x + ".($c)." <br>";
					$x1 = (-$b + sqrt($delta)) / (2 * $a);
					$x2 = (-$b - sqrt($delta)) / (2 * $a);
					echo "Phương trình có 2 nghiệm phân biệt x1 = ".$x1." và x2 = ".$x2;
	    		}
	    	}
	    }
	    if (isset($_POST['ketqua'])) {
	    	$a = isset($_POST['a']) ? $_POST['a'] : 0;
		    $b = isset($_POST['b']) ? $_POST['b'] : 0;
		    $c = isset($_POST['c']) ? $_POST['c'] : 0;
		    if (validate($a, $b, $c)== true) {
		    	giaiPT($a, $b, $c);
		    }else{
		    	echo "Dữ liệu không hợp lệ";
		    }
	    }
		

	 ?>
</body>
</html>