
<html>
<head>
  
    <meta charset="utf-8">
    <meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
    <title>Filtrar usuarios</title>
   
</head>
    <body>
    <meta charset="utf-8">
		<meta name="viewport" content="width=device-width, initial-scale=1, maximum-scale=1"/>
        <link href="css/estilos.css" rel="stylesheet">
    <link rel="stylesheet" href="https://maxcdn.bootstrapcdn.com/bootstrap/3.3.6/css/bootstrap.min.css">
 
<style>
.container {
	max-width: 800px;
	margin: 0 auto;
}

.result-box {
	margin-top: 20px;
}

table {
	width: 100%;
	border-collapse: collapse;
}

th, td {
	padding: 8px;
	text-align: left;
	border-bottom: 1px solid #ddd;
}


</style>
    </head>
	<body>

        <header>
        <div class="text-center">
                <a href="comparar.php">Comparar fechas</a>
                <a href="edad.php">Conocer Edad</a>
                <a href="usuario.php">Datos de Usuario</a>
                <a href="calculadora.php">Base de Datos</a>
			<h1>Filtrar usuarios</h1>
			
          <form method="POST" action="<?php echo $_SERVER['PHP_SELF']; ?>">
            <label>Nombre:</label>
            <input type="text" name="nombre">
            <br><br>
            <label>Apellido:</label>
            <input type="text" name="apellido">
            <br><br>
            <label>Cédula:</label>
            <input type="number" name="cédula">
            <br><br>
            <input type="submit" value="Buscar">
          </form>
          
     </body>
</html>
<?php
// Datos de conexión a la base de datos
$servername = "localhost";
$username = "root";
$password = "mariale1";
$dbname = "my_proyecto";

// Crear una conexión
$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar la conexión
if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

// Función para filtrar y consultar los datos de la tabla
function consultarUsuarios($nombre, $apellido, $cedula) {
    global $conn;

    // Construir la consulta con los filtros proporcionados
    $sql = "SELECT * FROM usuarios WHERE 1=1";

    if (strlen($nombre) === 1) {
        $sql .= " AND nombre LIKE '$nombre%'";
    }

    if (strlen($apellido) === 1) {
        $sql .= " AND apellido LIKE '$apellido%'";
    }

    if (!empty($cedula)) {
        $sql .= " AND cédula = '$cedula'";
    }

    $result = $conn->query($sql);

    if ($result->num_rows > 0) {
        echo "<div class='container result-box'>";
        echo "<h1>Resultados de la búsqueda:</h1>";
        echo "<table>";
        echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Cédula</th></tr>";
        while ($row = $result->fetch_assoc()) {
            echo "<tr>";
            echo "<td>" . $row["id"] . "</td>";
            echo "<td>" . $row["nombre"] . "</td>";
            echo "<td>" . $row["apellido"] . "</td>";
            echo "<td>" . $row["cédula"] . "</td>";
            echo "</tr>";
        }
        echo "</table>";
        echo "</div>";
    } else {
        echo "<div class='container result-box'>";
        echo "No se encontraron usuarios que cumplan con el filtro.";
        echo "</div>";
    }
}

// Verificar si se envió el formulario
if ($_SERVER["REQUEST_METHOD"] == "POST") {
    $nombre = isset($_POST["nombre"]) ? $_POST["nombre"] : "";
    $apellido = isset($_POST["apellido"]) ? $_POST["apellido"] : "";
    $cedula = isset($_POST["cédula"]) ? $_POST["cédula"] : "";

    // Ejecutar consulta con filtros
    consultarUsuarios($nombre, $apellido, $cedula);
}

// Mostrar todos los datos de la tabla sin filtros
$sql = "SELECT * FROM usuarios";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    echo "<div class='container result-box'>";
    echo "<h1>Todos los usuarios:</h1>";
    echo "<table>";
    echo "<tr><th>ID</th><th>Nombre</th><th>Apellido</th><th>Cédula</th></tr>";
    while ($row = $result->fetch_assoc()) {
        echo "<tr>";
        echo "<td>" . $row["id"] . "</td>";
        echo "<td>" . $row["nombre"] . "</td>";
        echo "<td>" . $row["apellido"] . "</td>";
        echo "<td>" . $row["cédula"] . "</td>";
        echo "</tr>";
    }
    echo "</table>";
    echo "</div>";
} else {
    echo "<div class='container result-box'>";
    echo "No se encontraron usuarios en la base de datos.";
    echo "</div>";
}

$conn->close();
?>