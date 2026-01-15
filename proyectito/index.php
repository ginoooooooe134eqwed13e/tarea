<!DOCTYPE html>
<html lang="es">
<head>
    <meta charset="UTF-8">
    <title>Proyecto PHP GET y POST</title>
</head>
<body>

<h2>Menú de navegación (GET)</h2>

<a href="index.php?seccion=Inicio">Inicio</a> |
<a href="index.php?seccion=Unidades">Unidades</a> |
<a href="index.php?seccion=Contacto">Contacto</a>

<hr>

<?php
// USO DEL MÉTODO GET
if (isset($_GET['seccion'])) {
    echo "<h3>Sección seleccionada: " . $_GET['seccion'] . "</h3>";
}
?>

<hr>

<h2>Formulario de contacto (POST)</h2>

<form method="POST" action="">
    <label>Nombre:</label><br>
    <input type="text" name="nombre"><br><br>

    <label>Correo electrónico:</label><br>
    <input type="email" name="correo"><br><br>

    <input type="submit" value="Enviar">
</form>

<hr>

<?php
// USO DEL MÉTODO POST
if (isset($_POST['nombre']) && isset($_POST['correo'])) {
    echo "<h3>Datos enviados:</h3>";
    echo "Nombre: " . $_POST['nombre'] . "<br>";
    echo "Correo: " . $_POST['correo'];
}
?>

</body>
</html>