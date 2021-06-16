<html lang="es">

    <head>

        <meta charset="UTF-8">
        <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css"> 
        <link rel="stylesheet" href="./css/style2.css">
        <title>Modificación de datos</title>

    </head>

    <body>
        
        <div class="m-0 vh-100 row justify-content-center align-items-center">
            <div class="col-auto p-5 text-center">
                <!-- Formulario -->
                <h1>Modificar Cliente</h1>
                <form method="POST" action="buscador.php" class="needs-validation">
                    <div class="input-group mb-3">
                        <input type="number" name="IdCliente" class="form-control" placeholder="Id del cliente que quieres modificar" required>
                    </div>
                    <button type="submit" class="btn action-button" >Modificar</button>
                </form>
                <!-- Fin del formulario -->

            </div>
        </div>


    <!-- Script Bootstrap -->
        <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
    <!-- Fin -->
    </body>

</html>