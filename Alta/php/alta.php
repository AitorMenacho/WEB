<html>
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="../css/Index.css" >
    </head>

    <body>
        <?php
        $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
        die("Problemas con la conexión");
    
      mysqli_query($conexion, "insert into clientes(NOMBRE,APELLIDO_1,APELLIDO_2,SEXO,DIRECCION,CORREO,TELEFONO,FECHA_NACIMIENTO,POBLACION,PROVINCIA,CONTRASEÑA,DNI) values 
                           ('$_REQUEST[NOMBRE]',
                           '$_REQUEST[APELLIDO_1]',
                           '$_REQUEST[APELLIDO_2]',
                           '$_REQUEST[SEXO]',
                           '$_REQUEST[DIRECCION]',
                           '$_REQUEST[CORREO]',
                           '$_REQUEST[TELEFONO]',
                           '$_REQUEST[FECHA_NACIMIENTO]',
                           '$_REQUEST[POBLACION]',
                           '$_REQUEST[PROVINCIA]',
                           '$_REQUEST[CONTRASEÑA]',
                           '$_REQUEST[DNI]')")
        or die("Problemas en el select" . mysqli_error($conexion));
    
      mysqli_close($conexion);
    
      echo "<div class='caja'>"."<fieldset>"."<div class='salida'>"."El alumno ha sido dado de alta."."</div>"."</fieldset>"."</div>";
        ?>
    </body>
</html>
