<html>

    <head>
        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">
        <link rel="stylesheet" href="./css/style.css">
        <title>Borrado de usuario</title>
    </head>

    <body>
        
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="col-auto p-5 text-center">
                <!-- Formulario -->
                <h1>Ingresa el ID que desea eliminar.</h1>
                <form method="POST" action="./borrado.php" class="needs-validation">
                    <div class="input-group mb-3">
                        <input type="number" name="ID_CLIENTES" class="form-control" placeholder="ID del usuario" min="0"  required>
                    </div>
                    <button type="submit" class="btn action-button" >Borrar</button>
                </form>
                <!-- Fin del formulario -->

            </div>
        </div>


    <!-- Script Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!-- Fin -->
    </body>

</html>