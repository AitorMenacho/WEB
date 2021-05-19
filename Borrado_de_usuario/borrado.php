<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/Index.css">
        <title>Borrado de usuario</title>
    </head>

    <body>
        <?php

            $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
                die("Problemas con la conexión");

            $registro = mysqli_query($conexion, "select ID_CLIENTES from clientes where CORREO='$_REQUEST[CORREO]'") or
                die("Problemas en el select:" . mysqli_error($conexion));

            if ($reg = mysqli_fetch_array($registro)) {
                mysqli_query($conexion, "delete from clientes where CORREO='$_REQUEST[CORREO]'") or 
                    die("Porblemas en el select:" . mysqli_error($conexion));

                echo "<div class='caja'>".
                        "<fieldset>".
                            "<h2 class='titulo'>"."Se ha borrado correctamente."."</h2>".
                            "<button type='submit' class='action-button' onClick='history.go(-2);'>".
                                "Volver".
                            "</button>".
                        "</fieldset>".
                    "</div>";;

            } else {
                
                echo "No existe ese alumno.";
            
            }
            mysqli_close($conexion);

        ?>
    </body>

</html>