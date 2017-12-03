<!DOCTYPE html>
<html>
<head>
	<title></title>
</head>
<body>
<?php
		if (empty($_GET)) {
			echo "No tengo datos de la reparación";
			exit();
		}

	  //$connection = new mysqli("localhost", "root", "2asirtriana", "tf", 3306);
    include_once('bd.php');

    //TESTING IF THE CONNECTION WAS RIGHT
    if ($connection->connect_errno) {
          printf("Connection failed: %s\n", $connection->connect_error);
          exit();
      }
  mysqli_query($connection, 'SET foreign_key_checks = 0');
	$query = "DELETE FROM reparaciones WHERE IdReparacion='".$_GET['idrep']."';";
	
	header('location: reparaciones.php');

	if ($result= $connection->query($query)) {
      echo "<script>alert('Reparación eliminada :)');</script>";
    ?>

    <table style="border: 1px solid black;">
    	<thead><tr>
    		<th>Matrícula</th>
    		<th>Marca</th>
    		<th>Modelo</th>
    		<th>Color</th>
    		<th>Fecha de Matriculación</th></tr>
    	</thead>

    <?php

    while ($obj = $result->fetch_object()) {
    	//recorrido de cada fila
    	echo "<tr>";
    	echo "<td>".$obj->Matricula."</td>";
    	echo "<td>".$obj->Marca."</td>";
    	echo "<td>".$obj->Modelo."</td>";
    	echo "<td>".$obj->Color."</td>";
    	echo "<td>".$obj->FechaMatriculacion."</td>";
    	echo "</tr>";
	}
	   
     $result->close();
     unset($obj);
     unset($connection);
 }
    ?>
</body>
</html>