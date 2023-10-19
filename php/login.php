<?php

$servername = "localhost";
$username = "rmichelvMov";
$password = "!@#ERTGFVDC#$RDS";
$database = "Proyecto";

$conn = new mysqli($servername, $username, $password, $database);

if ($conn->connect_error) {
    die("Conexión fallida: " . $conn->connect_error);
}

$rol = $_POST['rol'];
$usuario = $_POST['usuario'];
$contrasenha = $_POST['contrasenha'];

$sql = "SELECT * FROM usuarios WHERE Rol = '$rol' AND Email = '$usuario' AND Contrasenha = '$contrasenha'";
$result = $conn->query($sql);

if ($result->num_rows > 0) {
    header("Location: ../html/principal.html");
    exit();
} else {
    echo "Error: Usuario y/o contraseña incorrectos.";
}
$conn->close();
?>
