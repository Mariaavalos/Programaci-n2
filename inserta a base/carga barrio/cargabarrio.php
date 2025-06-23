<?php

include "conexion.php"; 

$Queryzona="SELECT * from zona order by 2";
$resultadozona=mysqli_Query($conexion,$Queryzona);

?>


<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>carga de barrio</title>
</head>
<body>
    <form method="POST" action="recibebarrio.php">
        <h1>Carga de barrios</h1>
        <br>
        <label>nombre del barrio </label>
        <br>
        <input type="text" name="barrio">
        <br>
        <label>zona </label>
       <br>
        <select name="zona">

        <?php
            $filo = mysqli_num_rows($resultadozona); 
                if($filo > 0)
                {
                    while( $registrozona=mysqli_fetch_array($resultadozona))
                        {
                            echo'<option value="'.$registrozona[0].'">'.$registrozona[1].'</option>';
                        }
            }
        ?>
        <select>
        <br>
        <input type="submit" name="reset" value="enviar">
        <input type="reset" name="cancelar" value="cancelar">
    </form>
</body>
</html>