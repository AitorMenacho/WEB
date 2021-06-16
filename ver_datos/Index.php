<html>

<head>
  <title>Datos</title>
  <link rel="stylesheet" href="../bootstrap-5.0.1-dist/css/bootstrap.css">  
  <link rel="stylesheet" href="./css/style -1.3.css">
</head>

<body>

  <?php
  $conexion = mysqli_connect("localhost", "root", "", "aitor_base") or
    die("Problemas con la conexión");

  $registros = mysqli_query($conexion, "select ID_CLIENTES,NOMBRE,APELLIDO_1,APELLIDO_2,SEXO,DIRECCION,CORREO,TELEFONO,FECHA_NACIMIENTO,POBLACION,PROVINCIA,CONTRASEÑA,DNI
                        from clientes") or
    die("Problemas en el select:" . mysqli_error($conexion));

  while ($reg = mysqli_fetch_array($registros)) {
    echo "<div class='caja'>";
    echo "<span style='font-weight: bold'>"."Codigo: "."</span>"."<a title='Clicla para borrar el registro.' href='../Borrado_de_usuario/borrado.php?ID_CLIENTES=". $reg['ID_CLIENTES']."'>" .$reg['ID_CLIENTES']."</a>". " | ";
    echo "<span style='font-weight: bold'>"." Nombre: " ."</span>". $reg['NOMBRE']. " | ";
    echo "<span style='font-weight: bold'>"." Apellidos: " ."</span>". $reg['APELLIDO_1']. " " . $reg['APELLIDO_2']. " | ";
    echo "<span style='font-weight: bold'>"." Sexo: " ."</span>". $reg['SEXO']. " | ";
    echo "<span style='font-weight: bold'>"." Dirección: " ."</span>". $reg['DIRECCION']. " | ";
    echo "<span style='font-weight: bold'>"." Correo:"."</span>".$reg['CORREO']." | ";
    echo "<span style='font-weight: bold'>"." Telefono: " ."</span>". $reg['TELEFONO']. " | ";
    echo "<span style='font-weight: bold'>"." Fecha de Nacimiento: " . $reg['FECHA_NACIMIENTO']. " | ";
    echo "<span style='font-weight: bold'>"." Población: " ."</span>". $reg['POBLACION']. " | ";
    echo "<span style='font-weight: bold'>"." Provincia: " ."</span>". $reg['PROVINCIA']. " | ";
    echo "<span style='font-weight: bold'>"." Contraseña: " ."</span>". $reg['CONTRASEÑA']. " | ";
    echo "<span style='font-weight: bold'>"." DNI: " ."</span>". $reg['DNI']. " | ";
    echo "</div>";
  }

  mysqli_close($conexion);
  ?>

<!-- Script Bootstrap -->
  <script src="https://cdn.jsdelivr.net/npm/bootstrap@5.0.0/dist/js/bootstrap.bundle.min.js" integrity="sha384-p34f1UUtsS3wqzfto5wAAmdvj+osOnFyQFpp4Ua3gs/ZVWx6oOypYoCJhGGScy+8" crossorigin="anonymous"></script>
<!-- Fin -->
</body>

</html>