<html>
    <head>
        <title>Registro</title>
        <link href="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/css/bootstrap.min.css" rel="stylesheet" integrity="sha384-wEmeIV1mKuiNpC+IOBjI7aAzPcEZeedi5yW5f2yOq55WWLwNGmvvx4Um1vskeMj0" crossorigin="anonymous">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/style.css" >
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
                           '$_REQUEST[CONTRASENNA]',
                           '$_REQUEST[DNI]')")
        or die("Problemas en el select" . mysqli_error($conexion));
    
        mysqli_close($conexion);
    
        echo "<div class='caja'>"."<fieldset>"."<div class='salida'>"."El alumno ha sido dado de alta."."</div>"."</fieldset>";
        echo "<button class='btn' onClick='history.go(-1);'>"."Volver"."</button>";
        echo "</div>"
      ?>
    </body>
</html>
