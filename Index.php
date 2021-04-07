<html>
    <head>
        <title>Registro</title>
    </head>

    <body>
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
        die("Problemas con la conexión");
    
      mysqli_query($conexion, "insert into alumnos(Nombre,Apellido,CorreoElectrónico,Contrasenna) values 
                           ('$_REQUEST[Nombre]','$_REQUEST[Apellido]','$_REQUEST[CorreoElectrónico]','$_POST[Contrasenna]')")
        or die("Problemas en el select" . mysqli_error($conexion));
    
      mysqli_close($conexion);
    
      echo "El alumno fue dado de alta.";
        ?>
    </body>
</html>
