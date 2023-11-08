<!Solicitar al usuario la fecha de nacimiento y al dar enviar el sistema calcule y haga una
comparación con la fecha actual y visualize :
• Si la edad es menor a 18 = “Su edad es” + edad + ” por tanto: No es mayor de edad”
• Si la edad es igual o mayor = “Su edad es” + edad + ” por tanto: Es mayor de edad”..>
<!DOCTYPE html>
<html>
<head>
    
    <meta charset="utf-8">
	<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Calcular Edad</title>

</head>
<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

    <link href="css/estilos.css" rel="stylesheet">
	<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">

	<body>

     <header>
     <div class="text-center">
                <a href="calculadora.php">Calculadora</a>
                <a href="edad.php">Conocer Edad</a>
                <a href="usuario.php">Datos de Usuario</a>
                <a href="conexionbd.php">Base de Datos</a>
        <h1>Calcular Edad</h1>
       
       <form method="POST" action="">
        <label>Seleccione su Fecha de nacimiento:</label><br>
        <input type="date" name="fecha_nacimiento" required><br><br>
        <label for="actual">Digite la fecha actual:</label><br>
        <input type="date" name="actual" id="actual"><br><br>
 <input type="submit" value="Calcular">
    </form>
</body>
</html>
<?php

function calcularEdad($fechaNacimiento) {
    $fechaNacimiento = new DateTime($fechaNacimiento);
    $hoy = new DateTime();
    $edad = $hoy->diff($fechaNacimiento);
    return $edad->y;
}

if(isset($_POST['fecha_nacimiento'])) {
    $fechaNacimiento = $_POST['fecha_nacimiento'];
    $edad = calcularEdad($fechaNacimiento);

    echo "<div class='text-center'>Su edad es: " . $edad . " años ";

    if ($edad < 18) {
        echo "<div class='text-center'>Por tanto: No es mayor de edad.";
    } else {
        echo "<div class='text-center'>Por tanto: Es mayor de edad.";
    }
}

?>