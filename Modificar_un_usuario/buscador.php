<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="./css/Style3.css">
        <title>Modificación de datos</title>
    </head>

    <body>
        <?php

            $conexion = mysqli_connect("localhost", "root", "", "base_examen") or
                die("Problemas con la conexión");

            $registro = mysqli_query($conexion, "select * from clientes where IdCliente='$_REQUEST[IdCliente]'") or
                die("Problemas en el select:" . mysqli_error($conexion));
            if ($reg = mysqli_fetch_array($registro)) {
                ?>
                    <div class="m-0 vh-100 row justify-content-center align-items-center">
                        <div class="col-auto p-5 text-center">
                        <!-- Formulario -->
                            <h1>Actualizar datos</h1>
                            <form method="POST" action="./actualizar.php">

                        <div class="input-group mb-4">
                        <input type="text" name="IdCliente" class="form-control" value="<?php echo $reg['IdCliente'] ?>" readonly>
                        <input type="text" name="Nombre" class="form-control" maxlength="15" placeholder="Nombre" pattern="^([A-ZÁ-Ú]{1}[a-zá-ú]+[ ]?){1,2}$" title="La primera letra debe ser mayúscula."  value="<?php echo $reg['Nombre'] ?>" readonly>
                        <input type="text" name="Apellido1" class="form-control" maxlength="15" placeholder="Primer apellido"  attern="^([A-ZÁ-Ú]{1}[a-zá-ú]+[ ]?){1,2}$"title="La primera letra debe ser mayúscula."  value="<?php echo $reg['Apellido1'] ?>">
                        <input type="text" name="Apellido2" class="form-control" maxlength="15" placeholder="Segundo apellido" pattern="^([A-ZÁ-Ú]{1}[a-zá-ú]+[ ]?){1,2}$" title="La primera letra debe ser mayúscula."  value="<?php echo $reg['Apellido2'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="NIF" placeholder="NIF" title="Número de Idenificación Fiscal" class="form-control" maxlength="9"  value="<?php echo $reg['NIF'] ?>" readonly>
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="Direccion" maxlength="50" placeholder="Dirección"  value="<?php echo $reg['Direccion'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="url" name="URL" maxlength="150" title="Dirección WEB" class="form-control" placeholder="URL"  value="<?php echo $reg['URL'] ?>">
                    </div>
    
                    <div class="input-group mb-3">
                        <input type="text" name="Direccion_IP" maxlength="16" class="form-control" title="divide los números por puntos" placeholder="Dirección IP" pattern="^(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)\.(25[0-5]|2[0-4][0-9]|[01]?[0-9][0-9]?)$"  value="<?php echo $reg['Direccion_IP'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="Direccion_MAC" maxlength="16" class="form-control" placeholder="Dirección MAC"  value="<?php echo $reg['Direccion_MAC'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" name="CodPostal" class="form-control" placeholder="Código Postal" maxlength="5" pattern="[0-9]{5}"  value="<?php echo $reg['CodPostal'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="Pais" maxlength="20" class="form-control" placeholder="País"  value="<?php echo $reg['Pais'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="number" name="Telefono" class="form-control" placeholder="Teléfono" pattern="[0-9] {9}" maxlength="9"  value="<?php echo $reg['Telefono'] ?>">
                    </div>
                      
                    <div class="input-group mb-3">
                        <input type="date" name="Fecha_alta" class="form-control"  value="<?php echo $reg['Fecha_alta'] ?>">
                    </div>

                    <div class="input-group mb-3">
                        <input type="email" name="Email" class="form-control" placeholder="Email"  value="<?php echo $reg['Email'] ?>">
                        <input type="number" name="Fax" class="form-control" maxlength="9" placeholder="Fax" pattern="[0-9]{9}"  value="<?php echo $reg['Fax'] ?>"> 
                    </div>

                    <div class="input-group mb-3 justify-content-center ">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Tipo_Cliente" id="1" value="1">
                            <label class="form-check-label" for="inlineRadio1">Platinum</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Tipo_Cliente" id="2" value="2">
                            <label class="form-check-label" for="inlineRadio1">Gold</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="Tipo_Cliente" id="3" value="3">
                            <label class="form-check-label" for="inlineRadio1">Silver</label>
                        </div>
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