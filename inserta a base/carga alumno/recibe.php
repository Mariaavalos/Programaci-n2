<?php


$Querybarrio="Select * from barrio order by 2";
$resultadobarrio=mysqli_Query($Conexion,$Querybarrio);
$nombre=$_POST["nombre"];
$apellido=$_POST["apellido"];
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

 $Query="INSERT INTO  alumnos (nombre_Alumno,apellido_Alumno,dni_Alumno,fecnac_Alumno,genero_Alumno,tipodesangre_Alumno,calle_Alumno,
 nrocalle_Alumno,edificio_Alumno,piso_Alumno, depto_Alumno, barrio_Alumno, telefono_Alumno, mail_Alumno, tutor_Alumno)
 VALUES 
 ('$nombre','$apellido','$fecnac','$genero','$sangre','$nombrecall','$numerocall','$edificio','$piso','$depto','$barrio','$telefono','$mail','$tutor')";
 

$Resultado=mysqli_Query($Conexion,$Query);

mysqli_close($Conexion);

echo $Query;

?>