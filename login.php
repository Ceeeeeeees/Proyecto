<?php
// Establecer la conexión a la base de datos (reemplaza con tus propios valores)
$servername = "127.0.0.1";
$username = "root";
$password = "";
$dbname = "proyecto";

$conn = new mysqli($servername, $username, $password, $dbname);

// Verificar si la conexión a la base de datos es exitosa
if ($conn->connect_error) {
    die("Error de conexión a la base de datos: " . $conn->connect_error);
}

// Verificar si se ha enviado el formulario
if ($_SERVER["REQUEST_METHOD"] === "POST") {
    // Obtener los valores ingresados en el formulario
    $username = $_POST["username"];
    $password = $_POST["password"];

    // Realizar la consulta en la base de datos para verificar las credenciales
    $sql = "SELECT * FROM usuarios WHERE username = '$username' AND password = '$password'";
    $result = $conn->query($sql);

    if ($result->num_rows === 1) {
        // Las credenciales son válidas, redireccionar al usuario a la página de inicio
        header("Location: inicio.php");
        exit;
    } else {
        // Las credenciales son inválidas, mostrar un mensaje de error
        $error = "Credenciales inválidas. Por favor, intenta nuevamente.";
    }
}

// Cerrar la conexión a la base de datos
$conn->close();
?>

<!-- Resto de tu código HTML -->

<!-- Dentro del bloque HTML, puedes mostrar el mensaje de error en caso de haberlo -->
<?php if (isset($error)): ?>
  <div class="alert alert-danger"><?php echo $error; ?></div>
<?php endif; ?>
