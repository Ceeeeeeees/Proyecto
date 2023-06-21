<?php
// Verificar si se ha enviado el formulario de registro
if ($_SERVER['REQUEST_METHOD'] === 'POST') {
    // Obtener los datos del formulario
    $nombre = $_POST['nombre'];
    $peso = $_POST['peso'];
    $edad = $_POST['edad'];
    $imc = $_POST['imc'];

    // Validar los datos (puedes agregar más validaciones según tus necesidades)
    if (empty($nombre) || empty($peso) || empty($edad) || empty($imc)) {
        // Mostrar mensaje de error si algún campo está vacío
        $mensaje = "Por favor, completa todos los campos.";
    } else {
        // Guardar los datos en la base de datos o realizar cualquier otra operación necesaria
        // ...

        // Mostrar mensaje de éxito
        $mensaje = "¡Registro exitoso! Nosotros no nos hacemos responsables del mal uso de la aplicación ni de su salud, úsese con cuidado. Esta aplicación no sustituye una consulta con un especialista.";
    }
}
?>

<!DOCTYPE html>
<html lang="es">

<head>
    <meta charset="UTF-8">
    <meta http-equiv="X-UA-Compatible" content="IE=edge">
    <meta name="viewport" content="width=device-width, initial-scale=1.0">
    <title>Bienestar para Todos!</title>
    <link rel="stylesheet" href="build/css/app.css">
    <link rel="stylesheet" href="build/css/estilos.css">

</head>

<body>

    <header class="header">
        <div class="contenedor contenido-header">
            <div class="barra">
             <a href="/" class="logo">
                <img src="build/img/logo5.png" alt="Logotipo">
            </a>
        

            <nav class="navegación">
                <a href="./somos.html">¿Quienes somos?</a>
                <a href="./planes.html">Nuestros planes</a>
                <a href="./servicios.html">Servicios</a>
                <a href="./login.php">Iniciar Sesión</a>
            </nav>
        </div>

        </div>

    </header>

    <main class="contenedor seccion sesion">
        <form style="width: 23rem;" method="POST" action="registro.php">
            <!-- Campos del formulario -->
            <label for="nombre">Nombre:</label>
            <input type="text" id="nombre" name="nombre" required><br>

            <label for="peso">Peso:</label>
            <input type="text" id="peso" name="peso" required><br>

            <label for="edad">Edad:</label>
            <input type="text" id="edad" name="edad" required><br>

            <label for="imc">IMC:</label>
            <input type="text" id="imc" name="imc" required><br>

            <input type="submit" value="Registrarse">
        </form>

        <!-- Mensaje de resultado -->
        <?php if (isset($mensaje)) : ?>
            <div class="mensaje">
                <?php echo $mensaje; ?>
            </div>
        <?php endif; ?>
    </main>

    <footer class="footer seccion">
        <div class="contenedor contenedor-footer">
            <nav class="navegación">
                <a href="./somos.html">¿Quienes somos?</a>
                <a href="./planes.html">Nuestros planes</a>
                <a href="./servicios.html">Servicios</a>
                <a href="./contacto.html">Contacto</a>
            </nav>
        </div>

        <p class="copy">Todos los derechos Reservados 2023 &copy;</p>

    </footer>

    <script src="build/js/bundle.min.js"></script>
</body>

</html>
