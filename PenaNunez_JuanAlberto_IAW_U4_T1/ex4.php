<!DOCTYPE html>
<html>
	<head>
		<title>IAW_U4_T1_1718:PHP (Vars & Loops & Conditional Structures)</title>
	</head>
	<body>
		<?php
	
			echo "<h1>Exercise 4: Loops I</h1>";

			$i = 1;
			while ($i < 10) {
				echo "abc ";
				$i++;
			}

			echo "<br>";
			echo "<br>";

			$i = 1;
			do {
				echo "xyz ";
				$i++;
			} while ($i < 10);

			echo "<br>";
			echo "<br>";

			for ($i = 1; $i <= 9; $i++) { 

				echo "<label>".$i." </label>";
			}
			
			echo "<br>";

			echo "<ol>";
			for ($i = "A"; $i <= "F"; $i++) { 
				echo "<li>Item ".$i."</li>";
			}
			echo "</ol>";
		?>
	</body>
</html> 