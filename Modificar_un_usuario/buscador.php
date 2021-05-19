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

            $registro = mysqli_query($conexion, "select * from clientes where CORREO='$_REQUEST[CORREO]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
            if ($reg = mysqli_fetch_array($registro)) {
                ?>

                <form class="caja" action="actualizar.php" method="POST">
                    <fieldset>    
                        <h2 class="titulo">Ingrese una nueva contraseña:</h2>
                        <input type="password" name="contraseñanueva" value="<?php echo $reg['CONTRASEÑA'] ?>">
                        <input type="hidden" name="contraseñavieja" value="<?php echo $reg['CONTRASEÑA'] ?>">
                        <button type="submit" class="action-button">Modificar</button>
                    </fieldset>
                </form>

            <?php
            } else
                echo "<div class='caja'>".
                        "<fieldset>".
                            "<h2 class='titulo'>"."No existe alumno con dicho mail"."</h2>".
                            "<button type='submit' class='action-button' onClick='history.go(-1);'>".
                                "Volver".
                            "</button>".
                        "</fieldset>".
                    "</div>";

            ?>
    </body>

</html>