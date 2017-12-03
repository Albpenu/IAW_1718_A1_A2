<!DOCTYPE html>
<html>
	<head>
		<title>IAW_U3_T2_1718:PHP Arrays</title>
	</head>
	<body>
		<?php
	
			echo "<h1>Exercise 2: Join to arrays</h1>";

			$array1 = [2,4,6,8];
			$array2 = [7,8,9,10];

			$arrays = array_merge($array1, $array2);

			print_r($arrays);
			echo "<br><br>";
			var_dump($arrays);
		?>
	</body>
</html> 