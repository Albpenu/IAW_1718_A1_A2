<!DOCTYPE html>
<html>
	<head>
		<title>IAW_U3_T2_1718:PHP Arrays</title>
	</head>
	<body>
		<?php
	
			echo "<h1>Exercise 3: Multidimensional array</h1>";

			$array = [["A" =>1,"B"=>2,"C"=>3],["D"=>4,"E"=>5,"F"=>6],["G"=>7,"H"=>8,"I"=>9]];

			echo '<table style="border:1px solid black;">';
			
			for ($i=0; $i < count($array) ; $i++) { 
				echo "<tr>";
				foreach ($array[$i] as $key => $value) {
					echo "<td style='width: 50px; height: 50px; text-align: center;'>$key:$value</td>";
				}
				echo "<tr>";
			}
			
			echo "</table>";
		?>
	</body>
</html> 