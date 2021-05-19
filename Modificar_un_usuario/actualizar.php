<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="./css/Index.css">
        <title>Modificación de datos</title>
    </head>

    <body>
        <?php

            $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
            die("Problemas con la conexión");

            mysqli_query($conexion, "update clientes
                                    set CONTRASEÑA='$_REQUEST[contraseñanueva]'
                                    where CONTRASEÑA='$_REQUEST[contraseñavieja]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
            echo "<div class='caja'>".
                    "<fieldset>".
                        "<h2 class='titulo'>"."La contraseña fue modificada con exito"."</h2>".
                        "<button type='submit' class='action-button' onClick='history.go(-2);'>".
                            "Volver".
                        "</button>".
                    "</fieldset>".
                "</div>";

        ?>
    </body>
</html>