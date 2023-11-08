<!-Realice un programa que mediante un formulario, solicite 2 números y pregunte al usuario
el tipo de operación que desee (SUMA, RESTA, MULTIPLICACIÓN Y DIVISIÓN) y muestre el
resultado de la operación..<!DOCTYPE html>
<html lang="en">
<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Calculadora</title>
</head>
<body>

		<meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>

		<link href="css/estilos.css" rel="stylesheet">
		<link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
        
        </head>
	<body>
		<header>
			<div class="text-center">
                <a href="comparar.php">Comparar fechas</a>
                <a href="edad.php">Conocer Edad</a>
                <a href="usuario.php">Datos de Usuario</a>
                <a href="conexionbd.php">Base de Datos</a>



                 <h1>Calculadora</h1>
                 
    <form method="post" action="<?php $_SERVER['PHP_SELF']; ?>">
        <label>Digite el primer número:</label><br>
        <input type="number" name="num1" required><br><br>
        <label>Digite el segundo número:</label><br>
        <input type="number" name="num2" required><br><br>
        <label>Seleccione qué tipo de operación desea realizar:</label><br>
        <select name="operacion">
            <option value="sumar">Sumar</option>
            <option value="restar">Restar</option>
            <option value="multiplicar">Multiplicar</option>
            <option value="dividir">Dividir</option>
        </select>
        <br><br>
        <input type="submit" name="submit" value="Calcular">
    </form>

    <?php
    if(isset($_POST['submit'])){
        $num1 = $_POST['num1'];
        $num2 = $_POST['num2'];
        $operacion = $_POST['operacion'];

        switch ($operacion) {
            case 'sumar':
                $resultado = $num1 + $num2;
                break;
            
            case 'restar':
                $resultado = $num1 - $num2;
                break;

            case 'multiplicar':
                $resultado = $num1 * $num2;
                break;
            
            case 'dividir':
                $resultado = $num1 / $num2;
                break;
            
            default:
                $resultado = "Sin resultados";
                break;
        }

        echo "<br><div class='text-center'>El resultado: ".$operacion." es igual a ".$resultado;
    }
    ?>
    </div>
</body>
</html>