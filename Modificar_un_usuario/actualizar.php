<html>

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style3.css">
        <title>Modificación de datos</title>

    </head>
    <body>
        <?php

            $conexion = mysqli_connect("localhost", "root", "", "base_examen") or
            die("Problemas con la conexión");

                mysqli_query($conexion, "update clientes
                                    set Apellido1='$_POST[Apellido1]',
                                        Apellido2='$_POST[Apellido2]',
                                        Direccion='$_POST[Direccion]',
                                        URL='$_POST[URL]',
                                        Direccion_IP='$_POST[Direccion_IP]',
                                        Direccion_MAC='$_POST[Direccion_MAC]',
                                        CodPostal='$_POST[CodPostal]',
                                        Pais='$_POST[Pais]',
                                        Telefono='$_POST[Telefono]',
                                        Fecha_alta='$_POST[Fecha_alta]',
                                        Email='$_POST[Email]',
                                        Fax='$_POST[Fax]',
                                        Tipo_Cliente='$_POST[Tipo_Cliente]'
                                        
                                    where IdCliente='$_POST[IdCliente]'") or
                                    die("Problemas en el select:" . mysqli_error($conexion));

                echo "<div class='m-0 vh-100 row justify-content-center align-items-center'>".
                        "<div class='col-auto p-5 text-center'>".
                            "<h2>"."La usuario fue modificado con exito"."</h2>".
                            "<button type='submit' class='btn action-button' onClick='history.go(-2);'>".
                                "Volver".
                            "</button>".
                        "</div>".
                    "</div>";

        ?>
    </body>
</html>