<?php
include 'conexion.php';

$nombre = $_POST['nombre'];
$correo_electronico = $_POST['correo_electronico'];

$sql = "INSERT INTO suscripciones (nombre, correo_electronico) VALUES ('$nombre', '$correo_electronico')";

if ($conn->query($sql) === TRUE) {
    echo "Nueva suscripción registrada exitosamente.";
} else {
    echo "Error: " . $sql . "<br>" . $conn->error;
}

$conn->close();
?>