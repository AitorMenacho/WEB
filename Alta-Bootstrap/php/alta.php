<html>
    <head>
        <title>Registro</title>
        <link rel="stylesheet" href="../../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="../css/style.css" >
    </head>

    <body>
      <?php
        $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
        die("Problemas con la conexión");

        $nameErr = "";
        $name = "";
        $hayerrores = 0;

        if ($_SERVER["REQUEST_METHOD"] == "POST") {
          if (empty($_POST["NOMBRE"])) {
            $nameErr = "NOMBRE REQUERIDO";
            $hayerrores = 1;
          }
        }
        
          
          if ($hayerrores = 0) {

           
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
    
        echo"<div class='m-0 vh-100 row justify-content-center align-items-center'>".
              "<div class='col-auto p-5 text-center'>".
                "<h2>"."El alumno ha sido dado de alta."."</h2>".
                "<button type='submit' class='btn action-button' onClick='history.go(-1);'>"."Volver"."</button>".
              "</div>".
            "</div>";
        } else {
          ?>
          <?php
            include("../index.php");
            $nameErr;
          ?>
          <?php
        }
      ?>
    </body>
</html>