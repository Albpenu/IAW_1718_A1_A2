<!DOCTYPE html>
<html>
	<head>
		<title>IAW_U4_T1_1718:PHP (Vars & Loops & Conditional Structures)</title>
	</head>
	<body>
		<?php
			echo "<h1>Exercise 5: Loops II</h1><br>";

			$numfilas = 10;
			$numcols = 10;
			$posicion = 0;

			echo "<table style='border: 1px solid black; border-collapse: collapse;' cellpadding='0'>";
				for ($i=1; $i <= $numfilas; $i++) { 
						echo "<tr>";
					echo "<tr style='border: 1px solid black; border-spacing: 0px;'>";
					for ($j=1; $j <= $numcols; $j++) { 
							if (($i+$j) % 2 == 0) {
								echo "<td style='width: 50px; height: 50px; background-color: grey;'></td>";
							} else {
								echo "<td style='width: 50px; height: 50px; background-color: red;'></td>";
							}
					}
					echo "</tr>";
				}
			echo "</table>";
		?>
	</body>
</html> 