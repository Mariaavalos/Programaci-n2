<?php

include "conexion.php"; 

 $Querygenero="SELECT * from genero order by 2";
 $resultadogenero=mysqli_Query($conexion,$Querygenero);

$Querybarrio="SELECT * from barrios order by 2";
$resultadobarrio=mysqli_Query($conexion,$Querybarrio);


$Queryzona="SELECT * from zona order by 2";
$resultadozona=mysqli_Query($conexion,$Queryzona);

?>

<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carga de los alumnos </title>
    <link rel="stylesheet"href="cargaalumno.css">
    <link href="https://fonts.googleapis.com/css2?family=Caprasimo&display=swap" rel="stylesheet">


    
</head>
<body>
    

    <form method="POST" action="guardaALumno.php">
        <h1>Carga de Alumnos</h1>

        <label>nombre del Alumno </label>
        <br>
        <input type="texte" name="nombre">
        <br>
        <br>  
        <label>Apellido del Alumno</label>
        <br>
        <input type="text" name="apellido">
        <br>  
        <br>
        <label>Dni del Alumno </label>
        <br>
        <input type="int" name="dni">
        <br>
        <br>
        <label>fecha de nacimiento del Alumno</label>
        <br>
        <input type="date" name="fecnac">
        <br>  
        <br>
        <label>Genero del Alumno</label>
        <br>
        <select name="genero">

        <?php
            $filo = mysqli_num_rows($resultadogenero); 
                if($filo > 0)
                {
                    while( $registrogenero=mysqli_fetch_array($resultadogenero))
                        {
                            echo'<option value="'.$registrogenero[0].'">'.$registrogenero[1].'</option>';
                        }
            }
        ?>
        <select>
        <br>
        <br>
        <label>tipo de sangre del Alumno</label>
        <br>
         <select name="sangre">
            <option value="A+">A+</option>
            <option value="A-">A-</option>
            <option value="B+">B+</option>
            <option value="B-">B-</option>
            <option value="AB+">AB+</option>
            <option value="AB-">AB-</option>
            <option value="O+">O+</option>
            <option value="O-">O-</option>
            <option value="RH+">RH+</option>
            <option value="RH-">RH-</option>
         </select><br>

        <label>Nombre de la calle</label>
        <br>
        <input type="text" name="nombrecall">   
        <br>

        <br>
        <label>Atura de la calle</label>
        <br>
        <input type="text" name="numerocall">   
        <br>
        <br>
        <label>Edificio del Alumno</label>
        <br>
        <input type="text" name="edificio">   
        <br>
        <br>
        <label>piso</label>
        <br>
        <input type="text" name="piso">   
        <br>
        
        <br> 
        <label>Depto</label>
        <br>
        <input type="text" name="depto">   
        <br>
        <br>
        <label>Barrio del Alumno</label>
        <br>
        <select name="barrio">
         
        <?php
            $filo = mysqli_num_rows($resultadobarrio);
                if($filo > 0)
                {
                    while( $registrobarrio=mysqli_fetch_array($resultadobarrio))
                        {
                            echo'<option value="'.$registrobarrio[0].'">'.$registrobarrio[1].'</option>';
                        }

            }else
                {  
                    echo '<option> sin datos </option>';
                }

        ?>
        <select>
        <br>
        <label>Telefono del Alumno</label>
        <br>
        <input type="text" name="telefono">   
        <br>
        <br>
        <label>Mail del Alumno</label>
        <br>
        <input type="text" name="mail">   
        <br>
        <br>
        <label>Tutor del Alumno</label>
        <br>
        <input type="text" name="tutor">   
        <br>
        <br>
        <input type="submit" name="reset" value="enviar">
        <input type="reset" name="cancelar" value="cancelar">
        <br>
    </form>


    

</body>
</html>