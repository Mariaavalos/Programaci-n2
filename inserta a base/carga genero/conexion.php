<?php
//___________________________________________________________________________________________________________________________

//declaro variables para la conexion
 $Server="localhost"; //Direccion de servidor  a conectarme
 $User="root"; // nombre del usuario para poder entrar al servidor 
 $Pass=""; // clave del usuario para poder validar el usuario
 $Base="escuela"; // basa de dato a la cual me quiero conectar

//______________________________________________________________________________________________________________________________

//establecer conexion a la base de datos bbdd
 $conexion = mysqli_connect($Server , $User , $Pass , $Base) 
 or die ("no se puede establecer la conexion: ".mysqli_connect.error());
//____________________________________________________________________________________________________________________________


?>