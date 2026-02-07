<?php
$servername = "localhost";
$username = "root";
$password = "";
$dbname = "contador_db";

// Crear connexió
$conn = new mysqli($servername, $username, $password, $dbname);

// Comprovar connexió
if ($conn->connect_error) {
    die("Connexió fallida: " . $conn->connect_error);
}

// Crear taula si no existeix
$sql = "CREATE TABLE IF NOT EXISTS visitas (
    id INT AUTO_INCREMENT PRIMARY KEY,
    comptador INT NOT NULL
)";
$conn->query($sql);

// Inicialitzar comptador
$result = $conn->query("SELECT comptador FROM visitas WHERE id=1");
if ($result->num_rows == 0) {
    $conn->query("INSERT INTO visitas (comptador) VALUES (1)");
    $visitas = 1;
} else {
    $row = $result->fetch_assoc();
    $visitas = $row['comptador'] + 1;
    $conn->query("UPDATE visitas SET comptador=$visitas WHERE id=1");
}

echo "Has visitat aquesta pàgina $visitas vegades amb base de dades.";
$conn->close();
?>
