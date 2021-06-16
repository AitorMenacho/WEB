<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
        <title>Modificación de datos</title>

    </head>
    <body>
        <?php

            $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
            die("Problemas con la conexión");

            mysqli_query($conexion, "update clientes
                                    set CONTRASEÑA='$_REQUEST[contrasennanueva]'
                                    where CONTRASEÑA='$_REQUEST[contrasennavieja]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
            echo "<div class='m-0 vh-100 row justify-content-center align-items-center'>".
                    "<div class='col-auto p-5 text-center'>".
                        "<h2>"."La contraseña fue modificada con exito"."</h2>".
                        "<button type='submit' class='btn action-button' onClick='history.go(-2);'>".
                            "Volver".
                        "</button>".
                    "</div>".
                "</div>";

        ?>
    </body>
</html>