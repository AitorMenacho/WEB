<!DOCTYPE html>

<html lang="es">
    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="https://cdnjs.cloudflare.com/ajax/libs/font-awesome/5.13.0/css/all.min.css" integrity="sha256-h20CPZ0QyXlBuAw7A+KluUYx/3pK+c7lYEpqLTlxjYQ=" crossorigin="anonymous" />
        <link rel="stylesheet" href="./CSS/style.css">
        <title>Registro con bootstrap</title>

    </head>

    <body>
        <!-- Centrar formulario -->
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="col-auto p-5 text-center">
                <!-- Formulario -->
                <h1>Registro</h1>
                
                <?php
                        if(isset($nameErr)){
                            echo $nameErr;
                        }
                ?>
                
                <form method="POST" action="./php/alta.php" class="needs-validation" onsubmit="return validarclave()">

                    <div class="input-group mb-4">
                        <input type="text" name="NOMBRE" class="form-control" placeholder="Nombre" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" title="La primera letra debe ser mayúscula.">
                        <input type="text" name="APELLIDO_1" class="form-control" placeholder="Primer apellido"  pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" title="La primera letra debe ser mayúscula.">
                        <input type="text" name="APELLIDO_2" class="form-control" placeholder="Segundo apellido" pattern="^([A-Z]{1}[a-z]+[ ]?){1,2}$" title="La primera letra debe ser mayúscula.">
                    </div>
                      
                    <div class="input-group mb-3 justify-content-center ">
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SEXO" id="hombre" value="hombre">
                            <label class="form-check-label" for="inlineRadio1">Hombre</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio" name="SEXO" id="mujer" value="mujer">
                            <label class="form-check-label" for="inlineRadio1">Mujer</label>
                        </div>
                        <div class="form-check form-check-inline">
                            <input class="form-check-input" type="radio"name="SEXO" id="otro" value="otro">
                            <label class="form-check-label" for="inlineRadio1">Otro</label>
                        </div>
                    </div>
    
                    <div class="input-group mb-3">
                        <input type="email" name="CORREO" class="form-control" placeholder="Correo electrónico" required>
                    </div>
                    
                    <div class="input-group mb-3">
                        <input type="text" name="TWITTER" class="form-control" placeholder="@Usuario de Twitter" pattern="^@([A-Za-z0-9_]{1,15})$" title="Debe empezar por @">
                    </div>

                    <div class="input-group mb-3">
                        <span class="input-group-text">+34</span>
                        <input type="text" name="TELEFONO" class="form-control" placeholder="Teléfono" pattern="[0-9]{9}" maxlength="9">
                    </div>
                      
                    <div class="input-group mb-3">
                        <input type="date" name="FECHA_NACIMIENTO" class="form-control">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" name="DNI" placeholder="DNI" class="form-control" pattern="^([0-9]{8}+[a-zA-Z]{1})$">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="DIRECCION" placeholder="Dirección">
                    </div>

                    <div class="input-group mb-3">
                        <input type="text" class="form-control" name="POBLACION" placeholder="Población">
                        <input type="text" class="form-control" name="PROVINCIA" placeholder="Provincia">
                    </div>

                    <div class="input-gruop mb-3">
                        <input type="password" class="form-control password1" id="pass1" name="CONTRASENNA" placeholder="Contraseña">
                        <span class="fa fa-fw fa-eye password-icon show-password"></span>
                    </div>
                    <div class="input-group mb-3">
                        <input type="password" class="form-control password2" id="pass2" name="CONTRASENNA2" placeholder="Confirmar contraseña">
                    </div>

                    <button type="submit" class="btn action-button" >Registrarme</button>

                </form>
                <!-- Fin del formulario -->

            </div>
        </div>

        <!-- Script -->

        <!-- Script Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
        <!-- Fin -->

        <!-- Script JQuery -->
        <script src="http://code.jquery.com/jquery.js"></script>
        <!-- Fin -->
        
        <!-- Script que comprueba si las claves son iguales -->
        <script src="./js/comprobacion.js"></script>
        <!-- Fin -->
        
        <!-- Script para ver la contraseña -->
        <script src="./js/ver_clave.js"></script>
        <!-- Fin -->

    </body>
</html>