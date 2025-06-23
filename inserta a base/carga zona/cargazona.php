
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carga de zona</title>
</head>
<body>
    <form method="POST" action="recibebarrio.php">
        <h1>Carga de zonas</h1>
        <br>
        <label>nombre del zona</label>
        <br>
        <input type="text" name="zona">
        <br>
        <input type="submit" name="reset" value="enviar">
        <input type="reset" name="cancelar" value="cancelar">

    </form>
</body>
</html>

<?php
include "conexion.php";

//recibo los datos del formulario

$zona=$_POST["zona"];
//establecer la sentencia sql

 $Query="  INSERT INTO  zona (nombre_Zona)
 VALUES 
 ('$zona')";
 $resultado=mysqli_query($conexion,$Query);

  echo $Query;


?>