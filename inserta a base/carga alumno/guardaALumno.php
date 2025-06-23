<?php
include "conexion.php"; 


$apellido=$_POST["apellido"];
$nombre=$_POST["nombre"];
$dni=$_POST["dni"];
$fecnac=$_POST["fecnac"];
$genero=$_POST["genero"];
$sangre=$_POST["sangre"];
$nombrecall=$_POST["nombrecall"];
$numerocall=$_POST["numerocall"];
$edificio=$_POST["edificio"];
$piso=$_POST["piso"];
$depto=$_POST["depto"];
$barrio=$_POST["barrio"];
$telefono=$_POST["telefono"];
$mail=$_POST["mail"];
$tutor=$_POST["tutor"];

 $Query="INSERT INTO  alumnos (apellido_Alumno,nombre_Alumno,dni_Alumno,fecnac_Alumno,genero_Alumno,tipodesangre_Alumno,calle_Alumno,
 nrocalle_Alumno,edificio_Alumno,piso_Alumno, depto_Alumno, barrio_Alumno, telefono_Alumno, mail_Alumno, tutor_Alumno)
 VALUES 
 ('$apellido','$nombre','$dni','$fecnac','$genero','$sangre','$nombrecall','$numerocall','$edificio','$piso','$depto','$barrio','$telefono','$mail','$tutor')";
 

 $resultado=mysqli_query($conexion,$Query);

  echo $Query;

?>