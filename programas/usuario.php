<!Realizar un programa que pida el nombre, apellido y número de cédula del usuario y
mediante el método GET capture los datos y lo envíe a otra página que muestro esos datos de
la siguiente manera:..>
<!DOCTYPE html>
<html lang="en">
<head>
   
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Datos Usuario</title>
</head>
    <body>

    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
    <body>
		<header>
        <div class="text-center">
                <a href="comparar.php">Comparar fechas</a>
                <a href="edad.php">Conocer Edad</a>
                <a href="calculadora.php">Datos de Usuario</a>
                <a href="conexionbd.php">Base de Datos</a>
            <h1>Registro Datos</h1>
    <form action="datos.php" method= "get">
<label for="nombre">Digite su nombre:</label><br>
<input type="text" name="nombre" id="nombre">
<br>
<label for="apellido">Digite su apellido:</label><br>
<input type="text" name="apellido" id="apellido"><br>
<label for="cedula">Digite su número de cedula:</label><br>
<input type="text" name="cedula" id="cedula"><br><br>
<input type="submit" value="Enviar">
</form>
</div>
    </header>
</body>
</html>

    
   

