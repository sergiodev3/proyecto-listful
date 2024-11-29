<?php
header('Content-Type: application/json');

$name = $_POST['name'] ?? '';
$email = $_POST['email'] ?? '';
$password = $_POST['password'] ?? '';

// En una aplicación real, aquí verificarías si el correo ya existe y guardarías los datos en una base de datos
if (!empty($name) && !empty($email) && !empty($password)) {
    echo json_encode([
        'success' => true,
        'message' => "Registro exitoso para $name!"
    ]);
} else {
    echo json_encode([
        'success' => false,
        'message' => 'Por favor, completa todos los campos.'
    ]);
}