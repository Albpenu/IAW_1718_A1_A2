<!DOCTYPE html>
<html>
	<head>
		<title>IAW_U3_T2_1718:PHP Arrays</title>
	</head>
	<body>
		<?php

			echo "<h1>Exercise 1: Reverse and Array</h1>";

			$array = ["A","B","C","D"];
			echo "<ul>";
			for ($i = count($array)-1; $i >= 0; $i--) { 
				echo '<li>"'.$array[$i].'"</li>';
			}
			echo "</ul>";
		?>
	</body>
</html> 