<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>busca alumno</title>
</head>
<body>
    <label><b>BUSQUEDA DE ALUMNOS</b> </label> 
    <br>
    <form method="POST" action="buscalumno.php">
    <br>
    <label><b>Alumno a buscar:</b></label> 
    <input type="text" name="palabra" size="40" >
    <br>
    <label><b>Buscar por...:</b> </label>

    <label>Nombre</label> 
    <input type="radio" name="option" value="Nombre" checked="checked">   

    <label>Apellido </label> 
    <input type="radio" name="option" value="Apellido">
    
    <br>
    <input type="submit" name="Buscar" value="Buscar"> 
    <a href="http://localhost/Avalos%206c/formulario.uno/inserta%20a%20la%20base%20escuela/carga%20alumno/cargaAlumno.php">ingresar nuevo alumno</a>

 </form>

<?php

 include "conexion.php";
    
 if ($_POST["Buscar"]) 
    {
        
        $option=$_POST["option"];
        $Buscar=$_POST["palabra"];
    
        if($option =="Nombre")
            {
                $query="SELECT * FROM alumnos
                WHERE nombre_Alumno like '%$Buscar%' ORDER BY id_Alumno " ;
            } 
          elseif($option=="Apellido")   
               {
                $query="SELECT * FROM alumnos
                WHERE apellido_Alumno  like '%$Buscar%' ORDER BY id_Alumno";
               }
            
    }  
    else 
        {
        
        }
        
$resultado=mysqli_Query($conexion,$query) or die ("error".mysql_error()); 

 if(mysqli_num_rows($resultado)>0)
 
    {
?>

<br>
  <table border =1>
    <tr style=\"border:0px solid gray \"bgcolor=\"#9370DB\">".

    <td><b>ID</b></td>
    <td><b>nombre</b></td>
    <td><b>apellido_Alumno</b></td>
    <td><b>dni_Alumno</b></td>
    <td><b>fecnac_Alumno</b></td>
    <td><b>genero_Alumno </b></td>
    <td><b>tipodesangre_Alumno</b></td>
    <td><b>calle_Alumno</b></td>
    <td><b>nrocalle_Alumno </b></td>
    <td><b>edificio_Alumno</b></td>
    <td><b>piso_Alumno</b></td>
    <td><b>depto_Alumno</b></td>
    <td><b>barrio_Alumno</b></td>
    <td><b>telefono_Alumno </b></td>
    <td><b>mail_Alumno</b></td>
    <td><b>tutor_Alumno </b></td>

    </tr>
     
<?php
 $bandera=0;

  while($Rs=mysqli_fetch_array($resultado))
  {
    if($bandera==0)
        {
            $bandera=1; 
                
            echo"<tr style=\"border:0px solid gray\"bgcolor=\"#b73f9a\">".
            "<td>".$Rs["id_Alumno"]."</td>".
            "<td>".$Rs["nombre_Alumno"]."</td>".
            "<td>".$Rs["apellido_Alumno"]."</td>".
            "<td>".$Rs["dni_Alumno"]."</td>".
            "<td>".$Rs["fecnac_Alumno"]."</td>".
            "<td>".$Rs["genero_Alumno"]."</td>".
            "<td>".$Rs["tipodesangre_Alumno"]."</td>".
            "<td>".$Rs["calle_Alumno"]."</td>".
            "<td>".$Rs["nrocalle_Alumno"]."</td>".
            "<td>".$Rs["edificio_Alumno"]."</td>".
            "<td>".$Rs["piso_Alumno"]."</td>".
            "<td>".$Rs["depto_Alumno"]."</td>".
            "<td>".$Rs["barrio_Alumno"]."</td>".
            "<td>".$Rs["telefono_Alumno"]."</td>".
            "<td>".$Rs["mail_Alumno"]."</td>".
            "<td>".$Rs["tutor_Alumno"]."</td>".




            "<td><a href=./frmalumnomodi.php?codigo".$Rs["id_Alumno"].">Modificar</a></td>".
            "<td><a href=./frmalumnomodi.php?codigo".$Rs["id_Alumno"].">elimniar</a></td>".
            "</tr>";
        }
        else{

            $bandera=0; 
                
            echo"<tr style=\"borde:0px solid gray \"bgcolor=\"#FFB6C1 \">".
            "<td>".$Rs["id_Alumno"]."</td>".
            "<td>".$Rs["nombre_Alumno"]."</td>".
            "<td>".$Rs["apellido_Alumno"]."</td>".
            "<td>".$Rs["dni_Alumno"]."</td>".
            "<td>".$Rs["fecnac_Alumno"]."</td>".
            "<td>".$Rs["genero_Alumno"]."</td>".
            "<td>".$Rs["tipodesangre_Alumno"]."</td>".
            "<td>".$Rs["calle_Alumno"]."</td>".
            "<td>".$Rs["nrocalle_Alumno"]."</td>".
            "<td>".$Rs["edificio_Alumno"]."</td>".
            "<td>".$Rs["piso_Alumno"]."</td>".
            "<td>".$Rs["depto_Alumno"]."</td>".
            "<td>".$Rs["barrio_Alumno"]."</td>".
            "<td>".$Rs["telefono_Alumno"]."</td>".
            "<td>".$Rs["mail_Alumno"]."</td>".
            "<td>".$Rs["tutor_Alumno"]."</td>".

            "<td><a href=./frmalumnosmodi.php?codigo".$Rs["id_Alumno"].">Modificar</a></td>".
            "<td><a href=./frmalumnosmodi.php?codigo".$Rs["id_Alumno"].">elimniar</a></td>".
            "</tr>";
            }

    }

  }
  else {
            echo"No hay Alumnos para registrar ";
  }
mysqli_close($conexion);
?>


</body>
</html>