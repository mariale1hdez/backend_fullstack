<!Solicitar al usuario la edad y al dar enviar el sistema muestre:
• Si la edad es menos a 18 = “No es mayor de edad”
• Si la edad es igual o mayor = “Es mayor de edad”..>
<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
   
</head>

<body>
<link href="css/estilos.css" rel="stylesheet">
<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
<meta name="viewport" content="width=device-width, initial-scale=1.0">
<body>
    
        </head>
	<body>
		<header>
        <div class="text-center">
                <a href="comparar.php">Comparar fechas</a>
                <a href="calculadora.php">Conocer Edad</a>
                <a href="usuario.php">Datos de Usuario</a>
                <a href="conexionbd.php">Base de Datos</a>

            <header>
    <h1>Edad</h1>
    
    <form action="" method="get">
        <label for="edad">Digite su edad:</label><br>
        <input type="text" name="edad" id="edad"><br><br>
        <input type="submit" value="Enviar"><br><br>
    </form>

    <?php
    if (isset($_GET['edad'])) {
        $edad = $_GET['edad'];

        if ($edad < 18) {
            echo "<div class='text-center'>No es mayor de edad</div>";
        } else {
            echo "Es mayor de edad";
        }
    }
    ?>
</header>
