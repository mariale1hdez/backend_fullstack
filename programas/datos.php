<!DOCTYPE html>
<html lang="en">
<head>
    <title>Datos Usuario</title>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <link rel="stylesheet" href="/CSS/style.php"></head>
    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
</head>
    
<body>
    <header>
        <section>
		<div class="text-center">
                <a href="comparar.php">Comparar fechas</a>
                <a href="edad.php">Conocer Edad</a>
                <a href="usuario.php">Datos de Usuario</a>
                <a href="conexionbd.php">Base de Datos</a>
                <a href="calculadora.php">Calculadora</a>

              <h1>Registro Datos</h1>
    </header>
        <section>
</body>
</html>


<?php
if (isset($_GET["nombre"]) && isset($_GET["apellido"]) && isset ($_GET["cedula"]))
{
echo "<div class='text-center'>Nombre: ".$_GET["nombre"]."<br>";
echo "<div class='text-center'>Apellido: ".$_GET["apellido"]."<br>";
echo "<div class='text-center'>Cedula: ".$_GET["cedula"]."<br>";
}
?>