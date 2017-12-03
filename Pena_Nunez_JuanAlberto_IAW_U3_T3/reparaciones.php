<!DOCTYPE html>
<html>
<head>
	<title></title>
	<style type="text/css">
		th, td {
			text-align: center;
		}
	</style>
</head>
<body>
	<?php
		include_once('bd.php');
    //$mysqli = new mysqli("192.168.1.30", "root", "Admin2015", "tf", 3316); docker exec -it lamp /bin/bash mysql
		$query = "SELECT * FROM reparaciones;";

    if ($result= $connection->query($query)) {
      printf("<p>The select query returned %d rows.</p>", $result->num_rows);
    ?>
	<table border="1px solid black">
		<thead>
			<tr>
				<th>Id de Reparación</th>
				<th>Matrícula</th>
				<th>Fecha de entrada</th>
				<th>Km</th>
				<th>Avería</th>
				<th>Fecha salida</th>
				<th>Reparado</th>
				<th>Observaciones</th>
				<th>Editar</th>
			</tr>
		</thead>
		<tbody>	
	<?php
		while ($obj = $result->fetch_object()) {
		      echo "<tr>";
		      echo "<td>".$obj->IdReparacion."</td>";
		      echo "<td>".$obj->Matricula."</td>";
		      echo "<td>".$obj->FechaEntrada."</td>";
		      echo "<td>".$obj->Km."</td>";
		      echo "<td>".$obj->Averia."</td>";
		      echo "<td>".$obj->FechaSalida."</td>";
		      echo "<td>".$obj->Reparado."</td>";
		      echo "<td>".$obj->Observaciones."</td>";
		      echo "<td><a href='borrar.php?idrep=".$obj->IdReparacion."'><img src='borrar.png' title='Borrar reparación' /></a><a href='asignar_empleados.php?idrep=".$obj->IdReparacion."'><img src='empleados.png' title='Asignar empleados' /></a><a href='informe.php?idrep=".$obj->IdReparacion."'><img src='informe.png' title='Mostrar informe' /></a></td>";
		      echo "</tr>";
		    }
			   
		     $result->close();
		     unset($obj);
		     unset($connection);
		  }
	?>
		</tbody>
	</table>
</body>
</html>