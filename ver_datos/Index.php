<html>

<head>
  <title>Datos</title>
  <link rel="stylesheet" href="./css/style.css">
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
    echo "<fieldset>";
    echo "<h3>"."Codigo: "."</h3>". $reg['ID_CLIENTES'] . "<br>";
    echo "Nombre: " . $reg['NOMBRE'] . "<br>";
    echo "Apellidos: " . $reg['APELLIDO_1']. " " . $reg['APELLIDO_2'] ."<br>";
    echo "Sexo: " . $reg['SEXO'] . "<br>";
    echo "Dirección: " . $reg['DIRECCION'] . "<br>";
    echo "Correo: " . $reg['CORREO'] . "<br>";
    echo "Telefono: " . $reg['TELEFONO'] . "<br>";
    echo "Fecha de Nacimiento: " . $reg['FECHA_NACIMIENTO'] . "<br>";
    echo "Población: " . $reg['POBLACION'] . "<br>";
    echo "Provincia: " . $reg['PROVINCIA'] . "<br>";
    echo "Contraseña: " . $reg['CONTRASEÑA'] . "<br>";
    echo "DNI: " . $reg['DNI'] . "<br>";
    echo "<fieldset>";
    echo "</div>";
  }

  mysqli_close($conexion);
  ?>

</body>

</html>