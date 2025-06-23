<?php
include "conexion.php";

//recibo los datos del formulario

$genero=$_POST["genero"];
//establecer la sentencia sql

 $Query="  INSERT INTO  genero (nombre_Genero)
 VALUES 
 ('$genero')";
 $resultado=mysqli_query($conexion,$Query);

  echo $Query;


?>
