<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
        <title>Borrado de usuario</title>
    </head>

    <body>
        <?php

            $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
                die("Problemas con la conexión");

            $registro = mysqli_query($conexion, "select ID_CLIENTES from clientes where ID_CLIENTES='$_REQUEST[ID_CLIENTES]'") or
                die("Problemas en el select:" . mysqli_error($conexion));

            if ($reg = mysqli_fetch_array($registro)) {
                mysqli_query($conexion, "delete from clientes where ID_CLIENTES='$_REQUEST[ID_CLIENTES]'") or 
                    die("Porblemas en el select:" . mysqli_error($conexion));

                echo "<div class='m-0 vh-100 row justify-content-center align-items-center'>".
                        "<div class='col-auto p-5 text-center'>".
                            "<h2>"."Se ha borrado correctamente."."</h2>".
                            "<button type='submit' class='btn action-button' onClick='history.go(-1);'>"."Volver"."</button>".
                        "</div>".
                    "</div>";;

            } else {
                echo"<div class='m-0 vh-100 row justify-content-center align-items-center'>".
                        "<div class='col-auto p-5 text-center'>".
                            "<h2>"."No existe ese alumno."."</h2>".
                            "<button type='submit' class='btn action-button' onClick='history.go(-1);'>"."Volver"."</button>".
                        "</div>";
                    "</div>";
            
            }
            mysqli_close($conexion);

        ?>
    </body>

</html>