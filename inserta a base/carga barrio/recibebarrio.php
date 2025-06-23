<?php

include "conexion.php";


$barrio=$_POST["barrio"];
$zona=$_POST["zona"];

//establecer la sentencia sql

 $Query="INSERT INTO  barrios (Nombre_Barrio)
 VALUES 
 ('$barrio')";

 $resultado=mysqli_query($conexion,$Query);

  echo $Query;


 

?>