<!DOCTYPE html>
<html>
	<head>
		<title>IAW_U3_T2_1718:PHP Arrays</title>
	</head>
	<body>
		<?php
	
			echo "<h1>Exercise 4: Color Table</h1>";

			$colorName = array();
			$colorName['BlanchedAlmond'] = '#ffebcd';
			$colorName['CadetBlue'] = '#5f9ea0';
			$colorName['BurlyWood'] = '#deb887';
			$colorName['DarkOliveGreen'] = '#556b2f';
			$colorName['HotPink'] = '#ff69b4';
			$colorName['Papayawhip'] = '#ffefd5';

			echo '<table border="1"><tr><th>Color Name</th><th>Hex Code</th></tr>';
			
			foreach ($colorName as $key => $value) {
				echo "<tr bgcolor='$key'><td>$key</td><td>$value</td></tr>";
			}
			
			echo "</table>";
		?>
	</body>
</html> 