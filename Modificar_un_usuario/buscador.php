<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="./css/Style.css">
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
                    <div class="m-0 vh-100 row justify-content-center align-items-center">
                        <div class="col-auto p-5 text-center">
                        <!-- Formulario -->
                            <h1>Contraseña vieja</h1>
                            <form method="POST" action="./actualizar.php">
                                <div class="input-gruop mb-3">
                                    <input type="password" name="contrasennavieja" class="form-control password1" id="pass1" value="<?php echo $reg['CONTRASEÑA'] ?>">
                                    <span class="fa fa-fw fa-eye password-icon show-password"></span>
                                </div>
                                <h1>Contraseña nueva</h1>
                                <div class="input-group mb-3">
                                    <input type="password" name="contrasennanueva" class="form-control password2" id="pass2" value="<?php echo $reg['CONTRASEÑA'] ?>">
                                </div>

                                <button type="submit" class="btn action-button" >Modificar</button>

                            </form>
                            <!-- Fin del formulario -->

                        </div>
                    </div>

                 <?php
            } else
                echo "<div class='m-0 vh-100 row justify-content-center align-items-center'>".
                        "<div class='col-auto p-5 text-center'>".
                            "<h2 class='titulo'>"."No existe alumno con dicho mail"."</h2>".
                            "<button type='submit' class='btn action-button' onClick='history.go(-1);'>".
                                "Volver".
                            "</button>".
                        "</div>".
                    "</div>";

            ?>

        <!-- Script Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <!-- Fin --> 
            
        <!-- Script Contraseña -->
        <script src="./JS/ver_clave.js"></script>
        <!-- Fin -->
    </body>

</html>